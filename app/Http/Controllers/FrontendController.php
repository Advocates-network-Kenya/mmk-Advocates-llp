<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use App\Http\Requests\StoreFrontendRequest;
use App\Http\Requests\UpdateFrontendRequest;
use App\Models\law;
use App\Models\Team;
use Illuminate\Support\Str;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $practiceareas = law::oldest()->paginate(6);
        $title = 'Welcome to mmkAdvocates LLp';
        return view('frontend.pages.index', ['title' => $title, 'practiceareas' => $practiceareas]);
    }

    /* Pages  */
    //About Us 
    public function aboutus()
    {
        //
        $title = 'About Us';
        return view('frontend.pages.about', ['title' => $title]);
    }

    //Practice Areas
    public function practiceareas()
    {
        //
        $practiceareas = law::oldest()->paginate(6);
        $title = 'Practice Areas';
        return view('frontend.pages.practice', [
            'title' => $title,
            'practiceareas' => $practiceareas
        ]);
    }

    //Our Team
    public function ourteam()
    {
        //
        $title = 'Our Team';
        //team where role = partner
        $partners = Team::where('role', 'partner')->paginate(6);
        //team where role = associate
        $associates = Team::where('role', 'associate')->paginate(6);
        //team where role = lawyer
        $lawyers = Team::where('role', 'lawyer')->paginate(6);
        //team where role = other
        $others = Team::where('role', 'other')->paginate(6);
        //team where role =paralegal
        $paralegals = Team::where('role', 'paralegal')->paginate(6);

        return view('frontend.pages.team',compact('title', 'partners', 'associates', 'lawyers', 'others', 'paralegals'));
    }


    //Contact Us
    public function contact()
    {
        //
        $title = 'Contact  Us';
        return view('frontend.pages.contact', ['title' => $title]);
    }

    //Consultation
    public function consultation()
    {
        //
        $title = 'consultation';
        return view('frontend.pages.consultation', ['title' => $title]);
    }

    //apointment
    public function appointment()
    {
        //
        $title = 'Apointment';
        return view('frontend.pages.appointment', ['title' => $title]);
    }






    /* end Pages */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFrontendRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Frontend $frontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Frontend $frontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFrontendRequest $request, Frontend $frontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frontend $frontend)
    {
        //
    }
}
