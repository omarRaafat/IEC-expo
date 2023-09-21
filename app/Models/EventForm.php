<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App;
class EventForm extends Model
{
    use HasFactory;

    protected $table = "event_form";
    protected $fillable = ["title_ar" ,"title_en", "mandatory", "include"];
  
    public function getTitleAttribute(){

        return $this->{'title_'.App::getLocale()};

        } 


 
}
