<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'client'
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
        return $this->belongsToMany('App\Education')->withPivot('is_required');
    }


    /**
     * The team members on the project.
     */
    public function teamMembers()
    {
        return $this->belongsToMany('App\TeamMember')->withPivot('is_project_manager');
    }
}
