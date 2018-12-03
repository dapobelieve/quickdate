<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\{JWTException};
use App\User;
use Hash;
use Auth;
use App\Traits\HasherTrait;

class AuthController extends Controller
{
    use HasherTrait;
    protected $auth;

    public function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Email Required',
            'password.required' => 'Password Required'
        ]);


        try {
            if (!$token = $this->auth->attempt($request->only('email', 'password'))) {
                return response()->json([
                    'errors' => [
                        'root' => 'Could not sign u in with those details'
                    ]
                ], 401);
            }
        } catch (JWTException $e)
        {
            return response()->json([
                    'errors' => [
                        'root' => 'Failed'
                    ]
                ], $e->getStatusCode());
        }

        return response()->json([
            'data' => $request->user(),
            'meta' => [
                'token' => $token
            ]
        ], 200);
    }

    public function register(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'sex' => $request->sex,
            'datetype' => json_encode($request->datetype),
            'age' => $request->dob, // cnovert to years
            'slug' => $this->getHashedToken(12)
        ]);

        // attempt auth with jwt
        $token = $this->auth->attempt($request->only('email', 'password'));

        return response()->json([
            'data' => $user,
            'meta' => [
                'token' => $token
            ]
        ], 200);
    }
}
