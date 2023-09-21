<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class RegType extends Model
{
    use HasFactory;
    protected $table = "reg_types";
    // name	website	industry	address_line_1	address_line_2	city	post_code	country	main_telephone	secondary_telephone	main_email_address	
    protected $fillable = ["reg_type_ar","reg_type_en"];
  
    
    public function getRegTypeAttribute(){

        return $this->{'reg_type_'.App::getLocale()};

        } 
      

}
