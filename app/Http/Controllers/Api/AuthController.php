<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Models\PromotersRegistrations;

class AuthController extends Controller
{

    public function __construct(User $user)
    {
        // model as dependency injection
        $this->user = $user;
    }

    public function register(Request $request)
    {
        // validate the incoming request
        // set every field as required
        // set email field so it only accept the valid email format

        $this->validate($request, [
            'email' => 'required|string|email:rfc,dns|max:255|unique:users',
            'password' => 'required|string|min:6|max:255',
        ]);

        // if the request valid, create user

        $user = $this->user::create([
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        // login the user immediately and generate the token
        $token = auth('api')->login($user);

        // return the response as json 
        return response()->json([
            'meta' => [
                'code' => 200,
                'status' => 'success',
                'message' => 'User created successfully!',
            ],
            'data' => [
                'user' => $user,
                'access_token' => [
                    'token' => $token,
                    'type' => 'Bearer',
                    'expires_in' => auth('api')->factory()->getTTL() * 60,    // get token expires in seconds
                ],
            ],
        ]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|string',
            // 'password' => 'required|string',
        ]);

        
     
        $user = PromotersRegistrations::where('phone', $request->get('phone'))->first();
        if(!$user){
            return response()->json([
                'meta' => [
                    'code' => 404,
                    'status' => 'failed',
                    'message' => 'No Promoter with this number.',
                ]
            ],404);
        }
       
        $credentials = [
            "email" => "admin@umbrella.sa",
            "password" => "YWRtaW5AMjAzMAo="
        ];
        $token = auth('api')->attempt($credentials);
       


        // if token successfully generated then display success response
        // if attempt failed then "unauthenticated" will be returned automatically
        if ($token)
        {
          
            return response()->json([
                'meta' => [
                    'code' => 200,
                    'status' => 'success',
                    'message' => 'Data fetched successfully.',
                ],
                'data' => [
                    'user' => $user->makeHidden(['qualificatoin','birthdate','experience','id','other_langiages' 
                    , 'is_available' , 'emergency_contact' , 'created_at' 
                    , 'english_level' , 'attendance_time' 
                    , 'updated_at' , 'gender']),
                    'access_token' => [
                        'token' => $token,
                        'type' => 'Bearer',
                        'expires_in_seconds' => auth('api')->factory()->getTTL() * 15,
                    ],
                ],
            ]);
        }
      
    }

    public function logout()
    {
        // get token
        $token = JWTAuth::getToken();

        // invalidate token
        $invalidate = JWTAuth::invalidate($token);

        if($invalidate) {
            return response()->json([
                'meta' => [
                    'code' => 200,
                    'status' => 'success',
                    'message' => 'Successfully logged out',
                ],
                'data' => [],
            ]);
        }
    }

}
