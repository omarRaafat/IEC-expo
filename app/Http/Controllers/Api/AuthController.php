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
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|string|min:6|max:255',
        ]);

        // if the request valid, create user
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['type'] = "Mobile Device";
        if(PromotersRegistrations::where('email' , $data['email'])->first()){
            return response()->json([
               
                
                'status' => 'failed',
                'message' => 'Email Address Already Exists.',
            
        ],404);
        }
        if(PromotersRegistrations::where('phone' , $data['phone'])->first()){
            return response()->json([
               
                
                'status' => 'failed',
                'message' => 'Phone Already Exists.',
            
        ],404);
        }
        $promoter = PromotersRegistrations::create($data);

        // // login the user immediately and generate the token
        // $token = auth('api')->login($user);

        // return the response as json 
        return response()->json([
            
                'code' => 200,
                'status' => 'success',
                'message' => 'Account Registered successfully!'
                // 'promoter' => $promoter
                  
            
            
        ]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);

        
     
        $promoter = PromotersRegistrations::where('phone', $request->get('phone'))->where('type' , 'Mobile Device')->first();
        if(!$promoter){
            return response()->json([
                'meta' => [
                    'code' => 404,
                    'status' => 'failed',
                    'message' => 'No Promoter with this number.',
                ]
            ],404);
        }

        if(!Hash::check($request->get('password'), $promoter->password)){
            return response()->json([
               
                    'code' => 404,
                    'status' => 'failed',
                    'message' => 'Wrong Password.',
                
            ],404);
        }

        if($promoter->status == "Not Active"){
            return response()->json([
               
                    'code' => 400,
                    'status' => 'failed',
                    'message' => 'Account is not Active.',
                
            ],400);
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
             
                    'code' => 200,
                    'status' => 'success',
                    'message' => 'Logged In successfully.',
                    'user' => $promoter->makeHidden(['qualificatoin','birthdate','experience','id','other_langiages' 
                    , 'is_available' , 'emergency_contact' , 'created_at' 
                    , 'english_level' , 'attendance_time' 
                    , 'updated_at' , 'gender','password' , 'nationality' , 'country' , 'city']),
                    'access_token' => [
                        'token' => $token,
                        'type' => 'Bearer',
                        'expires_in_seconds' => auth('api')->factory()->getTTL() * 60,
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
