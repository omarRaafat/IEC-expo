<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Event;
use App\Models\EventForm;
use App\Models\RegNum;
use App\Models\RegType;
use App\Models\EventRegistration;
use App\Models\EventRegistrationSponExhi;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Mail\FireMailNotification;
use App\Mail\FireMailNotificationOffer;
use Mail;
use App\Models\Sponsor;
use App\Models\Exhibitor;
use App\Models\Subscription;
use App\Http\Traits\EmailFireTrait;
use PDF;
class ClientController extends Controller
{
    use EmailFireTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about')->with('settings' , Setting::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('services')->with(['settings' => Setting::first() ,'services' => Service::latest()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function projects()
    {
        $projects = Project::latest()->get();
        return view('projects')->with(['settings' => Setting::first() ,'projects' => $projects]);
    }

    public function projectDetails($project_id){
        $project = Project::find($project_id);
        $project->tags = explode(',' , $project->tags);
        return view('project-details')->with(['settings' => Setting::first() ,'project' => $project]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function SiteEventRegistration(Request $request)
    { 
        if($request->isMethod('post')){
            // return $request->all();
            if(EventRegistration::where("email" , 'like' , $request->email)->first())
            return redirect()->back()->with('error' , __('event.notification_email_error'));
            elseif(EventRegistration::where("phone" , 'like' , $request->phone)->first())
            return redirect()->back()->with('error' , __('event.notification_phone_error'));
            else
            $EventRegistration = EventRegistration::create($request->all());
           
    // return  $EventRegistration;
            return redirect('/site/event/registration/event_token:eventostbomentos2023116202206111115/register/response/'.$EventRegistration->id);

        }else {
            // return redirect('/');
            $event = Event::latest()->first();
            return view('event_registration_page')->with(['event' => $event , 'event_form' => EventForm::where('include' , 1)->get(),'settings' => Setting::first() , 'sponsors' => Sponsor::where('event_id' , $event->id)->get() , 'exhibitors' => Exhibitor::where('event_id' , $event->id)->get() , "regtypes" => RegType::all()  ]);
        }
    }

    // FOR SPONSER / EXHIBITOR REGISTRATION WITH REFERRAL LINK
    public function SiteEventRegistrationWithRefferal(Request $request ,  $referral_code = "3i"){
        if($request->isMethod('POST')){
            $this->SiteEventRegistrationSponExhi();
        }else{
            $event = Event::latest()->first();
            return view('event_registration_page')->with(['event' => $event , 'event_form' => EventForm::where('include' , 1)->get(),'settings' => Setting::first() , 'sponsors' => Sponsor::where('event_id' , $event->id)->get() , 'exhibitors' => Exhibitor::where('event_id' , $event->id)->get() , "regtypes" => RegType::all() , "referral_code" => $referral_code  ]);
    
        }
     
    }

    public function SiteEventRegistrationWithRefferal2(Request $request ,  $referral_code = "Laft"){
        if($request->isMethod('POST')){
            $this->SiteEventRegistrationSponExhi();
        }else{
            $event = Event::latest()->first();
            return view('event_registration_page')->with(['event' => $event , 'event_form' => EventForm::where('include' , 1)->get(),'settings' => Setting::first() , 'sponsors' => Sponsor::where('event_id' , $event->id)->get() , 'exhibitors' => Exhibitor::where('event_id' , $event->id)->get() , "regtypes" => RegType::all() , "referral_code" => $referral_code  ]);
    
        }
     
    }

    public function SiteEventRegistrationWithRefferal3(Request $request ,  $referral_code = "Ghada"){
        if($request->isMethod('POST')){
            $this->SiteEventRegistrationSponExhi();
        }else{
            $event = Event::latest()->first();
            return view('event_registration_page')->with(['event' => $event , 'event_form' => EventForm::where('include' , 1)->get(),'settings' => Setting::first() , 'sponsors' => Sponsor::where('event_id' , $event->id)->get() , 'exhibitors' => Exhibitor::where('event_id' , $event->id)->get() , "regtypes" => RegType::all() , "referral_code" => $referral_code  ]);
    
        }
     
    }

    public function SiteEventRegistrationSponExhi(Request $request){
            $data =  $request->all();
            $EventRegistration = EventRegistrationSponExhi::create($data);
            $event = Event::find($request->event_id);
            $reg_num = RegNum::find($request->reg_num);
            $reg_num->update(['status' => 0]);
            $EventRegistration->event_name = $event->name ;
            $EventRegistration->reg_num = $reg_num->reg_number ;
            $EventRegistration->start_date = $event->start_date ;
             $data['data']  = $EventRegistration;
            try {
                $pdf = PDF::loadView('_partials._mail_pdf' , $data);
                \Mail::to([$EventRegistration->email])->cc(['b.faisal@umbrella.sa' , 'baljumaah@umbrella.sa'])->send(new FireMailNotificationOffer($pdf) );
                // return view('_partials._mail_pdf' )->with('data' , $data['data']);
                return  redirect()->back()->with(['message' => __('event.notification_message')]);
            } catch (\Throwable $th) {
                throw $th;
            }

    }

    public function SiteEventRegistrationResponse($response)
    {
        $EventRegistration = EventRegistration::find($response);
        // return $EventRegistration->email;
        try {
            \Mail::to($EventRegistration->email)->send(new FireMailNotification($EventRegistration) );
            return view('_partials.qr_code')->with(['data' => $EventRegistration ]);
        } catch (\Throwable $th) {
           return $th;
        }
    }

    public function SiteEventRegistrationQrCode($data){
          $EventRegistration = EventRegistration::where("email" , $data)->first();
        return view('_partials.qr_code')->with(['data' => $EventRegistration ]);
    }

    public function RegNumberFromType(Request $request){
        $reg_nums = RegNum::where('reg_type_id' , $request->reg_type)->where('status' , 1)->get();
        
        return response()->json($reg_nums);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request  $request)
    {
        if (!Subscription::where('email' , $request->email)->first()) {
            Subscription::create($request->all());
            $message = "You Have Been Subscribed Successfully!";
        }else
            $message = "You Already Subscribed To our NewsLetter" ;      
        return response()->json(['message'=> $message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function eventMarketing()
    {
        return view('event_marketing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
