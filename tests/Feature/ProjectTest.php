<?php

namespace Tests\Feature;

use App\Education;
use App\Skill;
use App\TeamMember;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;


    /**
     * test that the user is redirected to the projects
     * index page when they go to the site root
     */
//    public function testRedirectToProjects()
//    {
//        $response = $this->get('/');
//        $response->assertRedirect('/project');
//    }

    /**
     * test that a project can be viewed on the index page
     */
//    public function testIndexProjects()
//    {
//        $project = factory('App\Project')->create();
//
//        $response = $this->get('/project');
//        $response->assertStatus(200);
//        $response->assertSee($project->title);
//    }


    /**
     * test that a project can be created
     */
//    public function testCreateProject()
//    {
//        $project = [
//            'title' => 'New Project',
//            'description' => 'Testing new project',
//            'client' => 'Disney',
//        ];
//
//        $response = $this->post('/project', $project);
//        $response->assertStatus(200);
//        $this->assertDatabaseHas('projects', [
//            'title' => 'New Project',
//            'description' => 'Testing new project',
//            'client' => 'Disney',
//        ]);
//
//    }


    /**
     * test that a project can be destroyed
     */
//    public function testDestroyProjects()
//    {
//        $project = factory('App\Project')->create();
//        $response = $this->delete('project/' . $project->id);
//
//        $response->assertStatus(302);
//        $this->assertDeleted($project);
//    }


    /**
     * test that a database correctly records relationships between a project and
     * its required skills, education and team members
     */
    public function testProjectRelationships()
    {
        // create a team member with specific skills and education
        $team_member = factory('App\TeamMember')->create();
        $skill = $team_member->skills()->save(factory('App\Skill')->make());
        $education = $team_member->education()->save(factory('App\Education')->make());

        // create a project that requires the team member's existing skills and education
        $project = factory('App\Project')->create();
        $project->skills()->save($skill->first());
        $project->education()->save($education->first());

        // add the team member to the project
        $project->teamMembers()->save($team_member);

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
        $this->assertDatabaseHas('project_team_member', [
            'team_member_id' => $team_member->id,
            'project_id' => $project->id,
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


    /**
     * test that a project with required skills/education will be assigned
     * team members to fill those requirements
     */
    public function testProjectFillsRequirements()
    {
        $this->refreshDatabase();

        // create factory team members with skills and educations
        factory('App\Skill', 10)->create();

        factory('App\TeamMember', 10)->create()
            ->each(function ($team_member) {
                $team_member->skills()->saveMany(Skill::all()->random(3), []);
                $team_member->education()->createMany(factory('App\Education', rand(0, 2))->make()->toArray());
            });

        // remove any unused skills from the database
        $used_skills = DB::table('team_member_skill')->get()->pluck('skill_id');
        Skill::whereNotIn('id', $used_skills)->delete();

        // create a project that has certain skill/education/year with signifly requirements
        $project = factory('App\Project')->create();
        $project->skills()->saveMany(Skill::all()->random(5), ['is_required' => true]);
        $project->education()->saveMany(Education::all()->random(2), ['is_required' => true]);

        // assign team members to the project
        $project->assignTeamMembers();

        // assert that the education requirements of the project are met
        $this->assertDatabaseHas('project_team_member', [
            'project_id' => $project->id,
            'team_member_id' => TeamMember::where('id', $project->education()->first()->team_member_id)->first()->id,
        ]);

        // assert that the skill requirements of the project are met
        $this->assertTrue($project->getUnmetSkills()->isEmpty());
    }
}
