<?php

namespace App\Http\Controllers;

use App\Models\law;
use App\Http\Requests\StorelawRequest;
use App\Http\Requests\UpdatelawRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class LawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'Areas of law';
        $practiceareas = law::all();
        return view('backend.law.index', compact('title', 'practiceareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Add Area of law';
        return view('backend.law.create', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelawRequest $request)
    {
        //
       // dd($request);
        //generate slug from title
        $slug = Str::slug($request->title, '-');
        //user_id
        $userId = Auth::id();
         //upload featured image if exists
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/law', 'public');
        }
        law::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $path,  
            'content' => $request->content,
           // 'icon' => $request->icon,
            'slug' => $slug,
            'user_id' => $userId,


        ]);
         return redirect()->route('law.index')->with('success', ' created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(law $law)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(law $law)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelawRequest $request, law $law)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(law $law)
    {
        //
    }
}
