<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Event;
class EventRegistrationSponExhi extends Model
{
    use HasFactory;

    protected $table = "event_registration_spon_exhi";
    // price
    protected $fillable = ["name","email","phone","event_id","registerer_type","job_title","work_dest" ,"referral_code","reg_type","reg_num"];
  
    public function event()
    {
        return $this->belongsTo('App\Models\Event' , 'event_id');
    }

    public function regNumValue()
    {
        return $this->belongsTo('App\Models\RegNum' , 'reg_num');
    }
    
  
      
      
}
