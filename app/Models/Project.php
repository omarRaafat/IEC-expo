<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App;
class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    //name	size	date_of_opp	closing_date	clients	contacts	status	source	percentage
    protected $fillable = ["title_en","description_en","title_ar","description_ar","tag_en","tag_ar","images"];
  
    public function getTitleAttribute(){
        return $this->{'title_'.App::getLocale()};
    }

    public function getDescriptionAttribute(){
        return $this->{'description_'.App::getLocale()};
    }

    public function getTagAttribute(){
        return $this->{'tag_'.App::getLocale()};
    }

    public function clientLogo(){
        return $this->morphOne(Media::class , 'mediable');
    }
}
