<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        $request = request()->all();
        $rules = [
            'email'    => 'required|email|min:3|max:255|exists:customers,email',
            'password' => 'required|min:6|max:30'
        ];
        $validator = Validator::make($request, $rules);
        if ($validator->fails()){
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 200);
        }
        $customer = Customer::whereEmail($request['email'])->first();
        if (Hash::check($request['password'], $customer->password)) {
            auth()->login($customer);
            $token = auth()->user()->createToken('meal-watch-seller-api-token')->plainTextToken;
            return response()->json([
                'status' => 'status',
                'data' => auth()->user(),
                'msg' => 'Login successfully.',
                'access_token' => $token,
                'token_type' => 'Bearer'
            ], 200);
        }
        return response()->json(['status' => 'error', 'msg' => 'Credentials does not match!'],401);
    }

    public function profile()
    {
        $customer = Customer::findOrFail(auth()->id());
        return response()->json([
            'status' => 'success',
            'data' => $customer
        ], 200);
    }
}
