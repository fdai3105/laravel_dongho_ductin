<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Address;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $user = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');
            $tokenResult->token->save();
            return response()->json([
                'user' => $user,
                'access_token' => 'Bearer ' . $tokenResult->accessToken,
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )
            ]);
        } else {
            return response()->json([
                'message' => 'check your email or password',
            ], 401);
        }
    }

    public function register(UserRequest $request)
    {
        $request->validated();
        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
        ]);

        if ($user) {
            return response()->json(['message' => 'created success']);
        } else {
            return response()->json(['message' => 'error can"t create user']);
        }
    }

    public function getUser(Request $request)
    {
        return response()->json($request->user());
    }

    public function getUserAddress(Request $request)
    {
        $address = Address::where('user_id', $request->user()->id)->get();
        return response()->json($address);
    }

    public function addAddress(Request $request)
    {
        $address = new Address();
        $address->city = $request->city;
        $address->district = $request->district;
        $address->ward = $request->ward;
        $address->user_id = $request->user()->id;
        $address->address = $request->detail;
        $address->save();
        return response()->json(['message' => 'ok']);
    }
}
