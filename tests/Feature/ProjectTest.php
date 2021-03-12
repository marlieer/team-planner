<?php

namespace Tests\Feature;

use App\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;


    /**
     * test that the user is redirected to the projects
     * index page when they go to the site root
     */
    public function testRedirectToProjects()
    {
        $response = $this->get('/');
        $response->assertRedirect('/project');
    }

    /**
     * test that a project can be viewed on the index page
     */
    public function testIndexProjects()
    {
        $project = factory('App\Project')->create();

        $response = $this->get('/project');
        $response->assertStatus(200);
        $response->assertSee($project->title);
    }


    /**
     * test that a project can be created
     */
    public function testCreateProject()
    {
        $project = [
            'title' => 'New Project',
            'description' => 'Testing new project',
            'client' => 'Disney',
        ];

        $response = $this->post('/project', $project);
        $response->assertStatus(200);
        $this->assertDatabaseHas('projects', [
            'title' => 'New Project',
            'description' => 'Testing new project',
            'client' => 'Disney',
        ]);

    }


    /**
     * test that a project can be destroyed
     */
    public function testDestroyProjects()
    {
        $project = factory('App\Project')->create();
        $response = $this->delete('project/' . $project->id);

        $response->assertStatus(302);
        $this->assertDeleted($project);
    }


    /**
     * test that a project can be created with skills/education requirements
     */
    public function testCreateProjectWithRelationships()
    {
        // create a team member with specific skills and education
        $team_member = factory('App\TeamMember')->create();
        $skill = $team_member->skills()->save(factory('App\Skill')->make());
        $education = $team_member->education()->save(factory('App\Education')->make());

        // create a project that requires the team member's existing skills and education
        $project = factory('App\Project')->create();
        $project->skills()->save($skill->first());
        $project->education()->save($education->first());


        // check database records for main relations
        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
        ]);
        $this->assertDatabaseHas('team_members', [
            'id' => $team_member->id,
        ]);
        $this->assertDatabaseHas('skills', [
            'id' => $skill->first()->id,
        ]);
        $this->assertDatabaseHas('education', [
            'id' => $education->first()->id,
            'team_member_id' => $team_member->id,
        ]);

        // check database records for many-to-many relationship tables
        $this->assertDatabaseHas('team_member_skill', [
            'team_member_id' => $team_member->id,
            'skill_id' => $skill->first()->id,
        ]);
        $this->assertDatabaseHas('project_skill', [
            'project_id' => $project->id,
            'skill_id' => $skill->first()->id,
        ]);
        $this->assertDatabaseHas('project_education', [
            'project_id' => $project->id,
            'education_id' => $education->first()->id,
        ]);
    }
}
