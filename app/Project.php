<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'client', 'minimum_years_with_signifly'
    ];

    protected $attributes = [
        'minimum_years_with_signifly' => 0,
    ];


    /**
     * The skills that are required by the project.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill')->withPivot('is_required');
    }


    /**
     * The educations that are required by the project.
     */
    public function education()
    {
        return $this->belongsToMany('App\Education', 'project_education')->withPivot('is_required');
    }


    /**
     * The team members on the project.
     */
    public function teamMembers()
    {
        return $this->belongsToMany('App\TeamMember')->withPivot('is_project_manager');
    }


    /**
     * Get the skills of the team members on this project
     */
    public function getTeamSkills()
    {
        return $this->teamMembers->map(function ($team_member) {
            return $team_member->skills->map(function ($skill) {
                return $skill;
            });
        })->flatten()->unique('id');
    }


    /**
     * Get skills still needed to be met on this project by team members
     */
    public function getUnmetSkills()
    {
        return $this->skills->whereNotIn(
            'id', $this->getTeamSkills()->pluck('id')
        );
    }


    /**
     * Get the educations of the team members on this project
     */
    public function getTeamEducation()
    {
        return $this->teamMembers->map(function ($team_member) {
            return $team_member->education->map(function ($education) {
                return $education;
            });
        })->flatten()->unique('id');
    }


    /**
     * Get educations still needed to be met on this project by team members
     */
    public function getUnmetEducation()
    {
        return $this->education->whereNotIn(
            'id', $this->getTeamEducation()->pluck('id')
        );
    }


    /**
     * Get candidate team members qualified for this project
     */
    public function getCandidates()
    {
        $unmet_skills_ids = $this->getUnmetSkills()->pluck('id');

        /* Reject all candidates who are already part of the team or do not meet the minimum years
         with Signifly requirement for the project
         Then filter team members to get all candidates with one or more matching skill.
         Then sort by number of skills matched
        */
        return TeamMember::where('years_with_signifly','>=', $this->minimum_years_with_signifly)->get()
            ->reject( function ($candidate) {
                return $this->teamMembers->pluck('id')->has($candidate->id);
            })
            ->filter(function ($candidate) use ($unmet_skills_ids) {
                return $candidate->skills->pluck('id')->intersect($unmet_skills_ids)->isNotEmpty();
            })
            ->sortBy(function ($candidate) use ($unmet_skills_ids) {
                return $candidate->skills->pluck('id')->intersect($unmet_skills_ids)->count();
            });
    }

    /**
     * Assign team members to the project to fulfill project skill
     * and education requirements
     */
    public function assignTeamMembers()
    {
        // fill education requirements
        while($this->getUnmetEducation()->isNotEmpty())
        {
            $this->teamMembers()->save(TeamMember::find($this->getUnmetEducation()->first()->team_member_id));
            $this->refresh();
        }

        // fill skill requirements
        while($this->getUnmetSkills()->isNotEmpty() and $this->getCandidates()->isNotEmpty())
        {
            // take the candidate with the most matching skills and add to the project
            $this->teamMembers()->save($this->getCandidates()->pop());
            $this->refresh();
        }

        return $this->teamMembers;
    }
}
