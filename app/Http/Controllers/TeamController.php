<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title='Team Management';
        $teams = Team::latest()->paginate(6);
        return view('backend.team.index', compact('title', 'teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Add Team Member';
        return view('backend.team.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        //
        $slug = Str::slug($request->name, '-');
        $userId = Auth::id();    
        //upload image
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/team', 'public');
        }
       Team::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'qualifications' => $request->qualifications,
            
            'image' => $path,
            'slug' => $slug,
            'user_id' => $userId,
            'content' => $request->content,
       ]);
        return redirect()->route('team.index')->with('success', ' created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
