<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'team_member_id', 'subject', 'type', 'school'
    ];


    /**
     * The Team Member with the education
     */
    public function teamMember()
    {
        return $this->belongsTo('App\TeamMember');
    }


    /**
     * The Projects that require the education
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project', 'project_education')->withPivot('is_required');
    }
}
