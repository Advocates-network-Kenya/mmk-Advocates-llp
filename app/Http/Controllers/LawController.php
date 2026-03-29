<?php

namespace App\Http\Controllers;

use App\Models\law;
use App\Http\Requests\StorelawRequest;
use App\Http\Requests\UpdatelawRequest;

class LawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'Areas of law';
        return view('backend.law.index', ['title' => $title]);
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
