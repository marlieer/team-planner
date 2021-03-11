<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name', 'bio', 'job_title', 'position', 'years_with_signifly', 'phone', 'email', 'profile_image'
    ];


    /**
     * The education that the team member has.
     */
    public function education()
    {
        return $this->hasMany('App\Education');
    }


    /**
     * The projects that the team member is on.
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project')->withPivot('is_project_manager');
    }


    /**
     * The skills that the team member has.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'team_member_skill');
    }
}
