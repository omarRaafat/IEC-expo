<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  // add the User model
use App\Models\EventRegistration;
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
        $user = EventRegistration::where('phone', $request->get('guest_phone'))->first();
        if(!$user){
            return response()->json([
                'meta' => [
                    'code' => 404,
                    'status' => 'failed',
                    'message' => 'No Guest with this number.',
                ]
            ],404);
        }
        return response()->json([
            'meta' => [
                'code' => 200,
                'status' => 'success',
                'message' => 'Guest Added to Attendence List successfully!',
            ],
           
        ]);
}
}
