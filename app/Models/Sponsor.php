<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Sponsor extends Model
{
    use HasFactory;

    protected $table = "sponsors";
    protected $fillable = ["image","event_id"];
  
    public function event()
    {
        return $this->belongsTo('App\Models\Event' , 'event_id');
    }
      
      
}
