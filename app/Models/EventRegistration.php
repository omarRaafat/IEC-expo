<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Event;
class EventRegistration extends Model
{
    use HasFactory;

    protected $table = "event_registration";
    protected $fillable = ["name","email","phone" , "event_id" , "is_attend" , "attend_counter"];
  
    public function event()
    {
        return $this->belongsTo('App\Models\Event' , 'event_id');
    }
      
      
}
