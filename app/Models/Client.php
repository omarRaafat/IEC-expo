<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = "clients";
    // name	website	industry	address_line_1	address_line_2	city	post_code	country	main_telephone	secondary_telephone	main_email_address	
    protected $fillable = ["name" , "website" , "industry" , "address_line_1" , "address_line_2" , "city" , "post_code" , "country" , "main_telephone" , "secondary_telephone" , "main_email_address"];
  
    


}
