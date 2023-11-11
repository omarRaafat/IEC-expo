<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App;
class Service extends Model
{
    use HasFactory;

    protected $table = "services";
    protected $fillable = ["title_en","title_ar","description_en" ,"description_ar","image"];

    public function getTitleAttribute(){
        return $this->{'title_'.App::getLocale()};
    }

    public function getDescriptionAttribute(){
        return $this->{'description_'.App::getLocale()};
    }
}
