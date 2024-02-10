<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  // add the User model
use App\Models\EventRegistration;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
        
   
    }

    public function attend(Request $request) 
    {
        // use auth()->user() to get authenticated user data
        // check guest number sent 
      
        try {
            $token = JWTAuth::getToken();
            JWTAuth::checkOrFail($token);
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['message' => 'Token expired'], 401);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['message' => 'Invalid token'], 401);
        }
   
        $user = EventRegistration::where('phone', $request->get('guest_phone'))->first();
        if(!$user){
            return response()->json([
                
                    'code' => 404,
                    'status' => 'failed',
                    'message' => 'No Guest with this number.',
                
            ],404);
        }
        $user->is_attend = 1;
        $user->attend_counter++;
        $user->save();
        return response()->json([
          
                'code' => 200,
                'status' => 'success',
                'message' => 'Guest Added to Attendence List successfully!',
            
           
        ]);
}


public function checkTokenValidity()
{
   
    return 0;
}

}
