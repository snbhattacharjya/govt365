<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('application.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application.create');
    }

    /**
     * Show the form for search a old resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('application.search');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'appl_name' => 'required|string|max:255',
          'mobile' => 'nullable|number|max:10',
          'plot_no' => 'required',
          'khatiyan_no' => 'required',
          'brief_history' => 'required|max:255',
          'comment' => 'required|max:255',
          'receive_date' => 'date_format:d/m/Y|before:tomorrow'
        ]);

        $application = new Application;
        $application->appl_name = $request->appl_name;
        $application->mobile = $request->mobile;
        $application->plot_no = $request->plot_no;
        $application->khatiyan_no = $request->khatiyan_no;
        $application->brief_history = $request->brief_history;
        $application->comment = $request->comment;
        $application->state = $request->state;
        $application->district = $request->district;
        $application->subdivision = $request->subdivision;
        $application->block = $request->block;
        $application->appl_category = $request->appl_category;
        $application->receive_date = $request->receive_date;

        $application->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $Application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $Application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $Application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $Application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
