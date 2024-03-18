<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Activity;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects', ['activities' => Activity::get()], ['project' => Project::get()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projectss');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->only(['title', 'pages', 'year']);
        $data['users_id'] = '1';
        $data['created_at'] = Carbon::now();
        $randomActivity = Activity::inRandomOrder()->first();
        if ($randomActivity) {
            $data['activities_id'] = $randomActivity->id;
        } else {
            throw new \Exception("Nessuna attività disponibile.");
        }
        
        Project::create($data);
        return redirect()->action([ProjectController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
