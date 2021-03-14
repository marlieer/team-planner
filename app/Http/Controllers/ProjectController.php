<?php

namespace App\Http\Controllers;

use App\Education;
use App\Http\Requests\StoreProject;
use App\Project;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Input\Input;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project/index', ['projects' => Project::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project/create', [
            'educations' => Education::all()->sortBy(['type', 'subject']),
            'skills' => Skill::all()->sortBy('name'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProject $request)
    {
        $validated = $request->validated();
        $project = Project::create($validated);

        // attach education requirements to project
        if($request->education_requirements)
        {
            foreach($request->education_requirements as $key => $value)
            {
                $project->education()->save(Education::find($key));
            };
        }

        // attach skill requirements to project
        if($request->skills)
        {
            foreach($request->skills as $key => $value)
            {
                $project->skills()->save(Skill::find($key));
            };
        }

        $project->assignTeamMembers();

        return redirect()->route('project.show', ['project' => $project]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project/show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Project::destroy($project->id);
        return redirect()->route('project.index');
    }
}
