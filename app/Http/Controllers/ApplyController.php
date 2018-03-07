<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;
use App\Job;
use App\User;
use App\Company;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //$application = Apply::create($request->all());
        //dd($request->all());
        $application = new Apply;

        $application->user_id = $request->input('user_id');
        $application->job_id = $request->input('job_id');

        $appliedJobId = $application->job_id;
        $appliedCompany = Company::with(['job','user'])
                                    ->whereHas('job',function ($query) use ($appliedJobId) {
                                        $query->where('id', $appliedJobId);
                                    })->get();
        foreach($appliedCompany as $compDet)
        {
            $compDet->toArray();
        }

        $application->company_id = $compDet['id'];
        $application->save();
        return view('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function showReceivedApplication(Request $request)
    {
        $company = Company::where('user_id', auth()->user()->id )->get();        
        foreach($company as $comp)
        {
            $company_id = $comp->id;
        }
        $currentUserJobs = Job::where('company_id', $company_id)->get();
        $hasApplications = Apply::where('company_id', $company_id)->get();
        
        if ($hasApplications->count() > 0) {
            $apply = Apply::where('company_id', $company_id)->get();

            $receivedApplications = Apply::with('job','user')
                                    ->whereHas('job',function ($query) use ($company_id) {
                                        $query->where('company_id', $company_id);
                                    })->get();
            $applicationsArray = $receivedApplications->toArray();
            foreach ($applicationsArray as $app) {
                $userid = $app['user_id'];
            }
            $users = User::where('id', $userid)->get();
            
            $users = User::with('resume')
                    ->whereHas('resume',function ($query) use ($userid) {
                        $query->where('user_id', $userid);
                    })->get();
            foreach ($users as $user) {
                $usern = $user->name;
                foreach ($user->resume as $userResume) {
                    $resumeId = $userResume->id;
                }
            }

            return view('applications', compact('receivedApplications','resumeId'));
        }
        else
        {
            echo "Ajild oroh hvselt baihgvi";die;
        }
    }
}