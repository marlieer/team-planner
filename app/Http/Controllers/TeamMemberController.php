<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamMember;
use App\Skill;
use App\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teamMember/index', ['teamMembers' => TeamMember::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teamMember.create', ['skills' => Skill::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamMember $request)
    {
        $validated = $request->validated();
        $extension = $validated['profile_image']->extension();
        $profile_image_path = $request->profile_image->storeAs('/images/profiles' , (str_replace(' ', '_', strtolower($request->name))) . '.' . $extension, 'public');
        $validated['profile_image'] = '/storage/' .$profile_image_path;
        $team_member = TeamMember::create($validated);

        // attach skill requirements to project
        if($request->skills)
        {
            foreach($request->skills as $key => $value)
            {
                $team_member->skills()->save(Skill::find($key));
            };
        }

        return redirect()->route('team_member.show', ['team_member' => $team_member->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function show(TeamMember $teamMember)
    {
        return view('teamMember/show', ['team_member' => $teamMember]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamMember $teamMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamMember $teamMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMember $teamMember)
    {
        TeamMember::destroy($teamMember->id);
        return redirect()->route('team_member.index');
    }
}
