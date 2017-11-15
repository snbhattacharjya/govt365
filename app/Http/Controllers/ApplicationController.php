<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Session;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        $applications = Application::all();
        return view('application.index')->with('applications', $applications);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'appl_name' => 'required|string|max:255',
          'mobile' => 'nullable|digits:10',
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
        $application->receive_date = date('Y-d-m',strtotime($request->receive_date));

        $application->save();
        Session::flash('success','Application Added Successfully with ID: '.$application->id);
        return redirect()->route('application.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $Application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
      $application = Application::find($application->id);
      return view('application.show')->with('application', $application);
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
