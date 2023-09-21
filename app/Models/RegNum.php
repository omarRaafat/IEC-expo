<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class RegNum extends Model
{
    use HasFactory;
    protected $table = "reg_nums";
    // name	website	industry	address_line_1	address_line_2	city	post_code	country	main_telephone	secondary_telephone	main_email_address	
    protected $fillable = ["reg_type_id" , "reg_number" , "status"];
  
    
    public function user(){
        return $this->belongsTo('App\Models\RegType' , 'reg_type_id');
    }

}
