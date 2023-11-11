<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class Setting extends Model
{
    use HasFactory;
    protected $table = "settings";
    //opp_id	user_id
    protected $fillable = ["background_color" , "about_title_en" , "about_description_en","about_title_ar" , "about_description_ar" , "about_image"];


    public function getAboutTitleAttribute(){

        return $this->{'about_title_'.App::getLocale()};

    }

    public function getAboutDescriptionAttribute(){

        return $this->{'about_description_'.App::getLocale()};

    }
 
}
