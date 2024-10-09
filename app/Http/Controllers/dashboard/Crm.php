<?php

namespace App\Http\Controllers\dashboard;

use Auth;
use Hash;
use Mail;
use App\Models\Opp;
use App\Models\Lead;
use App\Models\User;
use App\Models\Event;
use App\Models\Media;
use App\Models\Client;
use App\Models\RegNum;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Project;
use App\Models\RegType;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Sponsor;
use App\Models\EventForm;
use App\Models\Exhibitor;
use App\Models\OppAssign;
use App\Models\LeadAssign;
use App\Models\Notification;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\EventRegistration;
use App\Mail\FireMailNotification;
use App\Http\Traits\EmailFireTrait;
use App\Http\Controllers\Controller;
use App\Models\PromotersRegistrations;
use App\Models\EventRegistrationSponExhi;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Promoters;


class Crm extends Controller
{

  use EmailFireTrait;

  public function index()
  {
      return view('content.dashboard.dashboards-crm');
  }

  public function clientAddNew(Request $request){
    if ($request->isMethod('post')) {
    //  return $request->all();
      $request->validate([
        
        'name' => 'required',
        'main_telephone' => 'required',
        'country' => 'required',
        'industry' => 'required'
    ]);
     
      Client::create($request->all());
      return redirect('/clients/all');
    }else{
      return view('content.form-layout.form-layouts-vertical-clients');
    }

   
  }


  public function clientEdit(Request $request , $client_id){
    $client = Client::find($client_id);
    if ($request->isMethod('post')) {
     
      $request->validate([
        
        'name' => 'required',
        'main_telephone' => 'required',
        'country' => 'required',
        'industry' => 'required'
    ]);
     
   
      $client->update($request->all());
      return redirect('/clients/all');
    }else{
      return view('content.form-layout.form-layouts-vertical-clients-edit')->with('client' , $client);
    }

   
  }

  public function ClientIndex(){
     $clients = Client::latest()->get();
    return view('content.tables.tables-basic-clients')->with('clients' , $clients);
  }

  public function ClientDelete($client_id){
    $client = Client::find($client_id)->delete();
    return redirect('/clients/all');
   }

 
 

  public function ContactIndex(){
     $contacts = Contact::latest()->get();
    return view('content.tables.tables-basic-contacts')->with('contacts' , $contacts);
  }


  public function ContactDelete($contact_id){
    $contact = Contact::find($contact_id)->delete();
    return redirect('/contacts/all');
   }

  public function ProjectAddNew(Request $request){
    if ($request->isMethod('post')) {
     $all_data = $request->all();
      $request->validate([
        
         'title_en' => 'required',
         'description_en' => 'required',
         'title_ar' => 'required',
         'description_ar' => 'required',
         'images' => 'required'
       
       
    ]);
     
    if($images = $request->file('images')){
      $project_images = [];
      foreach ($images as $image) {
        
        $image_name =  time().$image->getClientOriginalName();
        $image->move('uploads/projects/images/' , $image_name);
        array_push($project_images , '/uploads/projects/images/'.$image_name);
      }
      $all_data['images'] = json_encode($project_images);
    }

    $project = Project::create($all_data);

    if($request->hasFile('client_logo')){
      $client_logo = $request->file('client_logo');
      $client_logo_name =  rand(1,10).'-'.time().$client_logo->getClientOriginalName();
      $client_logo_path = '/uploads/projects/client_logos/'.$client_logo_name;
      // get extension
      $extension = $client_logo->getClientOriginalExtension();
      // upload image
      $client_logo->move('uploads/projects/client_logos/' , $client_logo_name);
      $media = new Media([
        'media_path' => $client_logo_path,
        'media_type' => $extension,
      ]);

      
      $project->clientLogo()->save($media);
    }


    
     
      return redirect('/projects/all');
    }else{
      return view('content.form-layout.form-layouts-vertical-projects');
    }

   
  }

  public function ProjectEdit(Request $request , $project_id){
    $project = Project::find($project_id);
   
  
    if ($request->isMethod('post')) {
      $all_data   = $request->all();

    $request->validate([
        
        'title_en' => 'required',
        'description_en' => 'required',
        'title_ar' => 'required',
        'description_ar' => 'required'
     
     
     
  ]);
   
  if($images = $request->file('images')){

    $project_images = [];
    foreach ($images as $image) {
      
      $image_name =  time().$image->getClientOriginalName();
      $image->move('uploads/projects/images/' , $image_name);
      array_push($project_images , '/uploads/projects/images/'.$image_name);
    }
    $all_data['images'] = json_encode($project_images);
  }
       $project->update($all_data);

       if($request->hasFile('client_logo')){
      
        $client_logo = $request->file('client_logo');
        $client_logo_name =  rand(1,10).'-'.time().$client_logo->getClientOriginalName();
        $client_logo_path = '/uploads/projects/client_logos/'.$client_logo_name;
        // get extension
        $extension = $client_logo->getClientOriginalExtension();
        // upload image
        $client_logo->move('uploads/projects/client_logos/' , $client_logo_name);
        $media = new Media([
          'media_path' => $client_logo_path,
          'media_type' => $extension,
        ]);
  
       
        $project->clientLogo()->save($media);
        
      }else{
        return FALSE;
      }
  
  
      
       
      

      return redirect('/projects/all');
    }else{
      return view('content.form-layout.form-layouts-vertical-project-edit')->with([ 'project' => $project ]);
    }
  }

  public function ProjectIndex(){
   
    return view('content.tables.tables-basic-projects')->with(['projects' => Project::latest()->get()]);
  }


  public function getContactByClientID($client_id){
    // return response()->json("client_id_is".$client_id);

      return response()->json( Contact::where('client_id' , $client_id)->get());
  }

 
  public function ProjectDelete($project_id){
    Project::find($project_id)->delete();
    return redirect('/projects/all');
   }

   public function OppAssign(Request $request , $opp_id){
    $opp = Opp::find($opp_id);
    if($opp_assign = OppAssign::where('opp_id' , $opp_id)->first()){
      $opp_assign->update(['user_id' =>$request->user ]);
    }else{
      OppAssign::create(['opp_id' => $opp_id , 'user_id' => $request->user]);
    }
    $opp->update(['owner' => $request->user]);
    return redirect('/opps');
   }

   public function settings (Request $request){
    $all_data = $request->all();
    $cur_user = User::find(Auth::user()->id);
    if($request->hasFile('image')){
      $quota_file = $request->file('image');
      $quota_file_name = time().$quota_file->getClientOriginalName();
      $quota_file->move('uploads/opp/images/' , $quota_file_name);
      $all_data['image'] = '/uploads/opp/images/'. $quota_file_name;

    }
     if($request->password){
        $all_data['password'] = Hash::make($request->password);
     }else{
       $all_data['password'] = $cur_user->password;
     }

     $cur_user->update($all_data);
     return redirect()->back();
   }


   
   public function ServiceAddNew(Request $request){
    if ($request->isMethod('post')) {
      $all_data =  $request->all();
      $request->validate([
        
        'title_en' => 'required',
          'title_ar' => 'required',
        'description_en' => 'required',
          'description_ar' => 'required',
         'image' => 'required'
        
    ]);

        if($request->hasFile('image')){

            $image = $request->image;
            $image_name =  time().$image->getClientOriginalName();
            $image->move('uploads/services/images/' , $image_name);
            $all_data['image']= 'uploads/services/images/'.$image_name;


        }


        $service = Service::create($all_data);
    
      return redirect('/services/all');
    }else{
      return view('content.form-layout.form-layouts-vertical-services')->with(['services' => Service::latest()->get()]);
    }

   
  }


  public function ServiceEdit(Request $request , $service_id){
    $service = Service::find($service_id);
    if ($request->isMethod('post')) {
      $all_data =  $request->all();
    $request->validate([

        'title_en' => 'required',
        'title_ar' => 'required',
        'description_en' => 'required',
        'description_ar' => 'required',
      
  ]);

        if($request->hasFile('image')){

            $image = $request->image;
            $image_name =  time().$image->getClientOriginalName();
            $image->move('uploads/services/images/' , $image_name);
            $all_data['image']= 'uploads/services/images/'.$image_name;


        }
      $service->update($all_data);
      return redirect('/services/all');
    }else{
      return view('content.form-layout.form-layouts-vertical-services-edit')->with(['service' => $service ]);
    }

   
  }


  public function LeadRequestReject($lead_id){
    $lead = Lead::find($lead_id);
    $lead->update(['request_status' => 2]);
    return redirect('/received/leads/requests');  
   
  }

  public function ServiceIndex(){

   
  
    return view('content.tables.tables-basic-services')->with(['services' => Service::latest()->get()]);
  }

  public function LeadRequests(){
    $leads = Lead::where(['request_status' => 0 , 'sales_user' => Auth::user()->id])->latest()->get();
   return view('content.tables.tables-basic-leads-requests')->with(['leads' => $leads , 'users' => User::where('id' ,'!=' , Auth::user()->id)->latest()->get()]);
 }

  public function LeadDelete($lead_id){
    LeadAssign::where('lead_id' , $lead_id)->delete();
    $lead = Lead::find($lead_id)->delete();
    return redirect('/leads/all');
   }


   public function LeadAssign(Request $request , $lead_id){
    $lead = Lead::find($lead_id);
    $lead->update(['sales_user' => $request->user]);
    $user = User::find($request->user);
    $this->fire($user->email , "Lead re-assign" , "New Lead Assigned to you");
    return redirect('/leads/all');
   }



   public function EventIndex(){
    $events = Event::latest()->get();
   return view('content.tables.tables-basic-events')->with(['events' => $events]);
 }
 
   public function EventRegistrations(){
    $registrations = EventRegistration::latest()->get();
    
   return view('content.tables.tables-basic-events-registrations')->with(['registrations' => $registrations]);
 }

 public function EventAttendance(){
  $registrations = EventRegistration::where("is_attend" , 1)->latest()->get();
  
 return view('content.tables.tables-basic-events-attendance')->with(['registrations' => $registrations]);
}

 public function EventRegistrationsDelete($id){
  $registration = EventRegistration::find($id)->delete();
  return redirect()->back();
}
 
   public function EventRegistrations2(){
    $registrations2 = EventRegistrationSponExhi::latest()->get();
   return view('content.tables.tables-basic-events-registrations2')->with(['registrations2' => $registrations2]);
 }

 public function EventRegistrationsSponExpoView($registration_id){
  $registration = EventRegistrationSponExhi::find($registration_id);
 return view('content.form-layout.form-layouts-vertical-event-sponser-exhibitors-view')->with(['registration' => $registration]);
}

 public function EventRegistrations2Delete($id){
  $registration = EventRegistrationSponExhi::find($id);
    RegNum::find($registration->reg_num)->update(['status' => 1]);
    $registration->delete();
  return redirect()->back();
 }

   public function EventAddNew(Request $request){
   
    if ($request->isMethod('post')) {
     $all_data =  $request->all();
    //  return $request->titles;
      $request->validate([
        
        'name_ar' => 'required',
        'name_en' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'city_en' => 'required',
        'city_ar' => 'required',
        'location_ar' => 'required',
        'location_en' => 'required',
    ]);

     if($images = $request->file('images')){
       $event_images = [];
       foreach ($images as $image) {
         
         $image_name =  time().$image->getClientOriginalName();
         $image->move('uploads/events/images/' , $image_name);
         array_push($event_images , '/uploads/events/images/'.$image_name);
       }
       $all_data['images'] = json_encode($event_images);
     }

     if($images = $request->file('sponsors')){
      $event_images = [];
      foreach ($images as $image) {
        
        $image_name =  time().$image->getClientOriginalName();
        $image->move('uploads/events/sponsors/images/' , $image_name);
        array_push($event_images , '/uploads/events/sponsors/images/'.$image_name);
      }
      $all_data['sponsors'] = json_encode($event_images);
    }

    if($images = $request->file('exhibitors')){
      $event_images = [];
      foreach ($images as $image) {
        
        $image_name =  time().$image->getClientOriginalName();
        $image->move('uploads/events/exhibitors/images/' , $image_name);
        array_push($event_images , '/uploads/events/exhibitors/images/'.$image_name);
      }
      $all_data['exhibitors'] = json_encode($event_images);
    }


      
     if($request->has('titles')){
    
     
  //  return $request->titles;
        $titles = json_decode($request->titles);
       
      //  return $request->include;
     foreach ($titles as $key => $title) {
    // return $title;
     
          
           
            $_input = EventForm::where('title_en' , $title)->first();
            $_input->update(['include' => $request->include[$key]  , 'mandatory' =>$request->mandatory[$key]]);

     }
    }
   

  

     if(!$request->sessions)
       $all_data['sessions'] = 0;

       if(!$request->badges)
       $all_data['badges'] = 0;

       if(!$request->landing_page)
       $all_data['landing_page'] = 0;
     
  //  return $all_data;
      Event::create($all_data);
      return redirect('/events/all');
    }else{
      return view('content.form-layout.form-layouts-vertical-events')->with([ 'event_form_inputs' => EventForm::all()]);
    }


   
  }


  public function EventEdit(Request $request , $event_id){
    $event = Event::find($event_id);
    if ($request->isMethod('post')) {
     $all_data =  $request->all();
    //  return $request->titles;
      $request->validate([
        
        'name_ar' => 'required',
        'name_en' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'city_en' => 'required',
        'city_ar' => 'required',
        'location_ar' => 'required',
        'location_en' => 'required',
    ]);

     if($images = $request->file('images')){
       $event_images = [];
       foreach ($images as $image) {
         
         $image_name =  time().$image->getClientOriginalName();
         $image->move('uploads/events/images/' , $image_name);
         array_push($event_images , '/uploads/events/images/'.$image_name);
       }
       $all_data['images'] = json_encode($event_images);
     }


    //  if($image= $request->file('sponsor_1')){
     
        
    //     $image_name =  time().$image->getClientOriginalName();
    //     // return $image_name;
    //     $image->move('uploads/events/sponsors/images/' , $image_name);
    //     $all_data['sponsor_1'] = 'uploads/events/sponsors/images/'.$image_name;
    // }

      //   if($image= $request->file('sponsor_2')){
        
            
      //     $image_name =  time().$image->getClientOriginalName();
      //     $image->move('uploads/events/sponsors/images/' , $image_name);
      //     $all_data['sponsor_2'] = 'uploads/events/sponsors/images/'.$image_name;
      // }

      //   if($image= $request->file('sponsor_3')){
          
              
      //     $image_name =  time().$image->getClientOriginalName();
      //     $image->move('uploads/events/sponsors/images/' , $image_name);
      //     $all_data['sponsor_3'] = 'uploads/events/sponsors/images/'.$image_name;
      // }

      // if($image= $request->file('sponsor_4')){
          
              
      //   $image_name =  time().$image->getClientOriginalName();
      //   $image->move('uploads/events/sponsors/images/' , $image_name);
      //   $all_data['sponsor_4'] = 'uploads/events/sponsors/images/'.$image_name;
      // }

      // if($image= $request->file('sponsor_5')){
          
              
      //   $image_name =  time().$image->getClientOriginalName();
      //   $image->move('uploads/events/sponsors/images/' , $image_name);
      //   $all_data['sponsor_5'] = 'uploads/events/sponsors/images/'.$image_name;
      // }

      // if($image= $request->file('sponsor_6')){
          
              
      //   $image_name =  time().$image->getClientOriginalName();
      //   $image->move('uploads/events/sponsors/images/' , $image_name);
      //   $all_data['sponsor_6'] = 'uploads/events/sponsors/images/'.$image_name;
      // }

   
      
     if($request->has('titles')){
    
     
  //  return $request->titles;
        $titles = json_decode($request->titles);
       
      //  return $request->include;
     foreach ($titles as $key => $title) {
    // return $title;
     
          
           
            $_input = EventForm::where('title_en' , $title)->first();
            $_input->update(['include' => $request->include[$key]  , 'mandatory' =>$request->mandatory[$key]]);

     }
    }
   




     if($request->has('titles2')){
        $inputs = [];
       
     
          $titles = $request->titles2;
      
       foreach ($titles as $key => $title) {
      
              array_push($inputs , ['title_en' => $title , 'mandatory' => $request->mandatory2[$key]]);
           
       }
    
       EventForm::insert($inputs);
  
    
    }

  

     if(!$request->sessions)
       $all_data['sessions'] = 0;

       if(!$request->badges)
       $all_data['badges'] = 0;

       if(!$request->landing_page)
       $all_data['landing_page'] = 0;
     
  //  return $all_data;
      $event->update($all_data);
      return redirect('/events/all');
    }else{
      return view('content.form-layout.form-layouts-vertical-events-edit')->with(['event' => $event , 'event_form_inputs' => EventForm::all()]);
    }

   
  }


  public function EventDelete($event_id){
    $events = Event::find($event_id)->delete();
    return redirect('/events/all');
   }


   public function EventSponsors(Request $request , $event_id){
    
      if ($request->isMethod('post')) {
    
          if($request->hasFile('image')){
          $image = $request->image;
          $image_name =  time().$image->getClientOriginalName();
          $image->move('uploads/events/sponsors/images/' , $image_name);
          Sponsor::create([
            'image' =>'uploads/events/sponsors/images/'.$image_name,
            'event_id' => $event_id
          ]);
        }
          
       return redirect('/event/sponsors/'.$event_id);
     }else {
      $sponsors = Sponsor::where('event_id' , $event_id)->get();
      return view('content.tables.tables-basic-events-sponsors')->with(['sponsors' => $sponsors , 'event_id'=>$event_id]);
    }
    }

    public function EventSponsor( $event_id){
    
     
      return view('content.form-layout.form-layouts-vertical-events-sponsor')->with(['event_id' =>$event_id]);

    
    }
    

    

    public function EventExhibitors(Request $request , $event_id){
    
      if ($request->isMethod('post')) {
       
           if($request->hasFile('image')){
          $image = $request->image;
          $image_name =  time().$image->getClientOriginalName();
          $image->move('uploads/events/exhibitors/images/' , $image_name);
          Exhibitor::create([
            'image' =>'uploads/events/exhibitors/images/'.$image_name,
            'event_id' => $event_id
          ]);
        }
           
       return redirect('/event/exhibitors/'.$event_id);
     }else {
      $exhibitors = Exhibitor::where('event_id' , $event_id)->get();
      return view('content.tables.tables-basic-events-exhibitors')->with(['event_id' => $event_id ,'exhibitors' => $exhibitors]);
    }
    }

    public function EventExhibitor( $event_id){
  
      
      return view('content.form-layout.form-layouts-vertical-events-exhibitor')->with(['event_id' =>$event_id]);


}

    public function EventSponsorEdit(Request $request ,$event_id, $sponsor_id){
      $sponsor = Sponsor::find($sponsor_id);
      if ($request->isMethod('post')) {
          if($request->hasFile('image')){
        $image = $request->image;
        $image_name =  time().$image->getClientOriginalName();
        $image->move('uploads/events/sponsors/images/' , $image_name);
        $sponsor->update([
          'image' =>'uploads/events/sponsors/images/'.$image_name
        ]);
      }
         
     return redirect('/event/sponsors/'.$event_id);
   }else {
  
    return view('content.form-layout.form-layouts-vertical-events-sponsor-edit')->with(['event_id' => $event_id ,'sponsor' => $sponsor]);
  }
    }

    public function EventExhibitorEdit(Request $request ,$event_id, $exhibitor_id){
      $exhibitor = Exhibitor::find($exhibitor_id);
      if ($request->isMethod('post')) {
      
        if($request->hasFile('image')){
        $image = $request->image;
        $image_name =  time().$image->getClientOriginalName();
        $image->move('uploads/events/exhibitors/images/' , $image_name);
        $exhibitor->update([
          'image' =>'uploads/events/exhibitors/images/'.$image_name
        
        ]);
      }
         
     return redirect('/event/exhibitors/'.$event_id);
   }else {
    
    return view('content.form-layout.form-layouts-vertical-events-exhibitor-edit')->with(['event_id' => $event_id , 'exhibitor' => $exhibitor]);
  }
    }


    public function EventSponsorDelete($sponsor_id ){
      $exhibitor = Sponsor::find($sponsor_id)->delete();
      return redirect()->back();
    }

    public function EventExhibitorDelete($exhibitor_id ){
      $exhibitor = Exhibitor::find($exhibitor_id)->delete();
      return redirect()->back();
    }
   

    public function SiteSettings(Request $request){
      if ($request->isMethod('post')) {
       Setting::first()->update(['background_color' => $request->bk_color]);
       return redirect()->back();
      }else {
        return view('content.pages.pages-account-settings-site');
      }
    }

    public function SliderSettings(Request $request  , $slider_id = null){
      if ($request->isMethod('post')) {
        $slider = Slider::find($slider_id);
        $all_data =  $request->all();
        
        if($request->hasFile('image')){
         
          $image = $request->image;
          $image_name =  time().$image->getClientOriginalName();
          $image->move('uploads/slider/images/' , $image_name);
          $all_data['image']= 'uploads/slider/images/'.$image_name;

        
        }
       
          $slider->update($all_data);

       return redirect('/slider/settings');
     }else {
      return view('content.pages.pages-account-settings-slider')->with(['sliders' => Slider::all()]);
    }
    }

    public function SliderSetting($slider_id){
      $slider = Slider::find($slider_id);
      return view('content.pages.pages-account-settings-slider-edit')->with(['slider' => $slider]);
    }

    public function EventSettings(Request $request){
      $event = Event::latest()->first();
      if ($request->isMethod('post')) {
        $request->validate([
        
          'home_title_en' => 'required',
          'home_description_en' => 'required',
          'home_button_en' => 'required',
            'home_title_ar' => 'required',
            'home_description_ar' => 'required',
            'home_button_ar' => 'required',
          'home_link' => 'required'
         
      ]);
        $all_data =  $request->all();
          $event->update($all_data);
       return redirect('/event/settings');
     }else {
      return view('content.pages.pages-account-settings-event')->with(['event' => $event]);
    }
    }

    public function AboutSettings(Request $request){
      $setting = Setting::first();
      if ($request->isMethod('post')) {
        $all_data =  $request->all();
        $request->validate([
        
          'about_title_en' => 'required',
          'about_description_en' => 'required',
            'about_title_ar' => 'required',
            'about_description_ar' => 'required'
         
         
      ]);
      if($request->hasFile('about_image')){
         
        $image = $request->about_image;
        $image_name =  time().$image->getClientOriginalName();
        $image->move('uploads/about/images/' , $image_name);
        $all_data['about_image']= 'uploads/about/images/'.$image_name;

      
      }
       
          $setting->update($all_data);
       return redirect('/about/settings');
     }else {
      return view('content.pages.pages-account-settings-about')->with(['setting' => $setting]);
    }
    }

    public  function SubscriptionsIndex()
    {
      $subscriptions = Subscription::latest()->get();
      return view('content.tables.tables-basic-subscriptions')->with(['subscriptions' => $subscriptions]);

    }

    public function showPromoters(){
      
      $promoters =  PromotersRegistrations::latest()->get();
  
         return view ('content.tables.tables-basic-promoters')->with('promoters' ,$promoters );
    }

    public function showAppPromoters(){
      $promoters_registrations =  PromotersRegistrations::where('type' , 'Mobile Device')->latest()->get();
      // return $promoters_registrations;
         return view ('content.tables.tables-basic-promoters2')->with('promoters' ,$promoters_registrations );
    }

    public function promoterActivate($promoter){
      $promoterDetails = PromotersRegistrations::findOrFail($promoter);
      // return $promoterDetails -> status;
      $promoterDetails -> status== "Activated"?$promoterDetails -> status = 0:$promoterDetails -> status = 1;
      $promoterDetails->save();
      return redirect()->back();
    }

    public function showPromoter(int $promoter) {
        $promoter = PromotersRegistrations::find($promoter);
        return view('content.form-layout.form-layouts-vertical-promoters')->with(['promoter' => $promoter]);
    }


    public function EventRegistrarTypes(Request $request){
      $registrar_types = RegType::all();
      if ($request->isMethod('post')) {
          // FUTURE DEPLOY
      }else{
       
        return view('content.tables.tables-basic-registrartypes')->with('registrar_types' , $registrar_types);
      }
    }

    public function EventRegistrarTypesLocations(Request $request , $registrar_type_id){
      $registrar_numbers = RegNum::where('reg_type_id' , $registrar_type_id)->get();
    
      $reg_type = RegType::find($registrar_type_id); 
      // return $registrar;

      if ($request->isMethod('post')) {
        $locations =  $request->all();
       
        RegNum::where('reg_type_id' , $registrar_type_id)->delete();
          $reg_type_numbers = explode(',' , $request->reg_number);
          
          foreach($reg_type_numbers as $reg_type_number){
          RegNum::create([
             "reg_type_id" => $registrar_type_id,
             "reg_number" => $reg_type_number
          ]);
        }
          return redirect()->route('registrar.types')->with('message' , 'success update');
       
       
      }else{
         $reg_nums_array = [];
        foreach($registrar_numbers as $registrar_number){
           array_push($reg_nums_array, $registrar_number->reg_number);
        }
        $regnums = implode(',' , $reg_nums_array); 
         
        return view('content.form-layout.form-layouts-vertical-registrar-types-locations')->with(['registrar_numbers' => $regnums , 'registrar_type' => $reg_type]);
    }
  }

  public function EventRegistrarTypesCreate(Request $request){
    if ($request->isMethod('post')) {
      $request->validate([
        
        'reg_type_en' => 'required',
        'reg_type_ar' => 'required'
      
    ]);
        
        RegType::create( $request->all());
        return redirect()->route('registrar.types')->with('message' , 'success update');
      }else
      return view('content.form-layout.form-layouts-vertical-registrar-type-create');

     
    }

    public function EventRegistrarTypesUpdate(Request $request , $registrar_type_id){
        $registrar_type = RegType::find($registrar_type_id);
      if ($request->isMethod('post')) {
        $request->validate([
          
          'reg_type_en' => 'required',
          'reg_type_ar' => 'required'
        
      ]);
          
          $registrar_type->update( $request->all());
          return redirect()->route('registrar.types')->with('message' , 'success update');
        }else
        return view('content.form-layout.form-layouts-vertical-registrar-type-update')->with('registrar_type' , $registrar_type);
  
       
      
    }


    public function filterPromoters(Request $request){
      // return $request;
      // return PromotersRegistrations::where('gender' , $request->gender)->get();  
      $nationality_filter_en = "Saudi Arabia";
      $nationality_filter_ar = "المملكة العربية السعودية";
      if($request->has('gender') && $request->has('nationality')){
        if($request->nationality == "Saudi"){
          $promoters = PromotersRegistrations::where('gender' ,$request->gender)->whereIn('nationality' , [$nationality_filter_en,$nationality_filter_ar])->get();
      
        }else{
          $promoters = PromotersRegistrations::where('gender' ,$request->gender)->whereNotIn('nationality' , [$nationality_filter_en,$nationality_filter_ar])->get();
       
        } 
      } 

      elseif($request->has('nationality')){
      
        if($request->nationality == "Saudi"){
         $promoters = PromotersRegistrations::whereIn('nationality', [$nationality_filter_en,$nationality_filter_ar])->get();
        } 
        else{
          $promoters = PromotersRegistrations::whereNotIn('nationality', [$nationality_filter_en,$nationality_filter_ar])->get();
        }
        

      


      }elseif($request->has('gender')){
        $promoters =  PromotersRegistrations::where('gender' , $request->gender)->get();
       
      }
      else {
        $promoters =  PromotersRegistrations::latest()->get();
  
       
      }

      // request comes from export action
      if(request()->has('action') && request()->input('action') == "export")
      return Excel::download(new Promoters($promoters), 'promoters_export.xlsx', \Maatwebsite\Excel\Excel::XLSX, [
        'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=UTF-8',
    ]);
  
      // request comes from filter action
      return view ('content.tables.tables-basic-promoters')->with('promoters' ,$promoters );

 
    } 
  

}
