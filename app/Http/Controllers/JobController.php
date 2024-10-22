<?php

namespace App\Http\Controllers;


use App\Models\Country;
use App\Models\Setting;
use App\Services\JobService;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $jobService;

     /**
      * Inject JobService into the controller.
      */
     public function __construct(JobService $jobService)
     {
         $this->jobService = $jobService;
     }
 
    public function index()
    {
        return view('jobs_registration_page')->with(['settings' => Setting::first() , 'countries' => Country::all()]);
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
    public function store(JobRequest $request)
    {
       
        try {
            // Use the service to store the validated data
             $this->jobService->createJobApplication($request->validated());

            return redirect()->back()->with('success', 'Job application submitted successfully!');
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error' , 'An error occurred while submitting the application.');
        }
    }

  

  
}
