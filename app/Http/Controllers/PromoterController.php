<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Mail\FireMailNotificationContact;
use App\Rules\Recapchas;
use App\Models\PromotersRegistrations;
// use Recaptcha;
use Illuminate\Contracts\Validation\Rule;
class PromoterController extends Controller
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
    public function register(Request $request , $source=null)
    {
        if ($request->isMethod('post')) {
             $all_data =  $request->all();
          
             $country = Country::find($request->country);
             $all_data['country'] = $country->name;
             if(PromotersRegistrations::where('phone' , $all_data['phone'])->first())
             return redirect()->back()->with('error' , __('site.promoter_phone_error_message'));
            elseif(PromotersRegistrations::where('email' , $all_data['email'])->first())
            return redirect()->back()->with('error' , __('site.promoter_email_error_message'));
             else{
                PromotersRegistrations::create($all_data);
               return redirect()->back()->with('message' , __('site.success_message'));
             }
            
            }else{
              return view('promoters_registration_page')->with(['settings' => Setting::first() , 'countries' => Country::all()]);
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cities_from_country_id($country_id)
    {
         $cities = City::where('country_id' , $country_id)->get();
         foreach($cities as $city)
          $city->name = $city->name;
            return response()->json($cities);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
