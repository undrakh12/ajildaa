<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Company;
use App\User;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $companies = User::find($user_id)->company;
        //dd($companies);
        return view('post-job')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = Job::create($request->all());
        return redirect('/result');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);

        return view('job.index')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showResult(Request $request)
    {
        $jobs = Job::where('job_name','LIKE','%'.$request->job_name.'%')
                        ->orderBy('created_at','desc')
                        ->paginate(10);
        // $jobs = Company::with('job')->whereHas('job',function ($query) use($request)
        //     {
        //         $query->where('job_name','LIKE','%'.$request->job_name.'%');
        //     })->get();
        
        $latest_jobs = Job::where('job_name','LIKE','%'.$request->job_name.'%')
                        ->orderBy('created_at','desc')
                        ->paginate(10);

        return view('search-result')
                        ->with(array(
                        'latest' => $latest_jobs,
                        'jobs' => $jobs
                        ));
    }
}
