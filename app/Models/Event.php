<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App;
class Event extends Model
{
    use HasFactory;

    protected $table = "events";
    

	
	
	

    protected $fillable = ["name_ar","name_en","description_ar","description_en","start_date","end_date","city_ar","city_en","images","location_ar","location_en",
    "badges","sessions","landing_page","guest_type" ,
     "sponsor_1" , "exhibitor_1", "sponsor_2", "exhibitor_2", 
     "sponsor_3" , "exhibitor_3", "sponsor_4", "exhibitor_4", 
     "sponsor_5" , "exhibitor_5", "sponsor_6", "exhibitor_6",
     "home_title_en" , "home_description_en" , "home_button_en",
        "home_title_ar" , "home_description_ar" , "home_button_ar","home_link"
    ];
  

     public function getNameAttribute(){

        return $this->{'name_'.App::getLocale()};

        } 

        public function getCityAttribute(){

            return $this->{'city_'.App::getLocale()};

        } 

            public function getLocationAttribute(){

                return $this->{'location_'.App::getLocale()};

             } 

                public function getDescriptionAttribute(){

                    return $this->{'description_'.App::getLocale()};

                }

    public function getHomeTitleAttribute(){

        return $this->{'home_title_'.App::getLocale()};

    }

    public function getHomeDescriptionAttribute(){

        return $this->{'home_description_'.App::getLocale()};

    }

    public function getHomeButtonAttribute(){

        return $this->{'home_button_'.App::getLocale()};

    }





}
