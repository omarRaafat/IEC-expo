<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Event;
class PromotersRegistrations extends Model
{
    use HasFactory;

    protected $table = "promoters_registrations";
    protected $fillable = ["name", "password" , "type" ,"address" , "status","nationality","gender","country","city","birthdate",	"qualificatoin","experience","english_level","other_langiages","attendance_time","is_available","phone","email","emergency_contact"];
  
   
   public function getStatusAttribute($status){
         return $status == 1?'Activated' : "Not Active";
   }      
      
}
