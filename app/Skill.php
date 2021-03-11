<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name', 'category',
    ];


    /**
     * The team members that have the skill.
     */
    public function teamMembers()
    {
        return $this->belongsToMany('App\TeamMember');
    }


    /**
     * The projects that require the skill.
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project')->withPivot('is_required');
    }
}
