<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use App\Repository\Transformers\CustomerTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

class CustomerController extends ApiController
{
    protected $customerTransformer;

    public function __construct(customerTransformer $customerTransformer)
    {

        $this->customerTransformer = $customerTransformer;

    }

        /**
     * @description: Api user authenticate method
     * @param: email, password
     * @return: Json String response
     */
    public function authenticate(Request $request)
    {

        $rules = array (

            'email' => 'required|email',
            'password' => 'required',

        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator-> fails()){

            return $this->respondValidationError('Fields Validation Failed.', $validator->errors());

        }

        else{

            $user = Customer::where('email', $request['email'])->first();

            if($user){
                $api_token = $user->api_token;

                if ($api_token == NULL){
                    return $this->_login($request['email'], $request['password']);
                }

                try{

                    $user = JWTAuth::toUser($api_token);

                    return $this->respond([

                        'error' => false,
                        'status' => 'success',
                        'status_code' => $this->getStatusCode(),
                        'message' => 'Already logged in',
                        'customer' => $this->customerTransformer->transform($user)

                    ]);

                }catch(JWTException $e){

                    $user->api_token = NULL;
                    $user->save();

                    return $this->respondInternalError("Login Unsuccessful. An error occurred while performing an action!");

                }
            }
            else{
                return $this->respondWithError("Invalid Email or Password");
            }

        }

    }

    private function _login($email, $password)
    {

        $credentials = ['email' => $email, 'password' => $password];

        if ( ! $token = JWTAuth::attempt($credentials)) {

            return $this->respondWithError("User does not exist!");

        }

        $user = JWTAuth::toUser($token);

        $user->api_token = $token;
        $user->save();

        return $this->respond([

            'error'  => false,
            'status' => 'success',
            'status_code' => $this->getStatusCode(),
            'message' => 'Login successful!',
            'customer' => $this->customerTransformer->transform($user)

        ]);
    }

    /**
     * @description: Api user register method
     * @param: lastname, firstname, username, email, password
     * @return: Json String response
     */
    public function register(Request $request)
    {

        $rules = array (

            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:3'

        );

        // $validator = Validator::make($request->all(), $rules);

        // if ($validator-> fails()){

        //     return $this->respondValidationError('Fields Validation Failed.', $validator->errors());

        // }

        // else{

            $customer = Customer::create([

                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'password' => \Hash::make($request['password']),

            ]);

            return $this->respond([

                'error' => false,
                'status' => 'success',
                'status_code' => $this->getStatusCode(),
                'message' => 'Register successful!',

            ]);

        // }

    }

    /**
     * @description: Api user logout method
     * @author: Adelekan David Aderemi
     * @param: null
     * @return: Json String response
     */
    public function logout($api_token)
    {

        try{

            $user = JWTAuth::toUser($api_token);

            $user->api_token = NULL;

            $user->save();

            JWTAuth::setToken($api_token)->invalidate();

            $this->setStatusCode(Res::HTTP_OK);

            return $this->respond([

                'error' => false,
                'status' => 'success',
                'status_code' => $this->getStatusCode(),
                'message' => 'Logout successful!',

            ]);

        }catch(JWTException $e){

            return $this->respondInternalError("An error occurred while performing an action!");

        }

    }

    public function updateFcmToken(Request $request) {

        $customer = Customer::find($request['customer_id']);
        $customer->fcm_token = $request['fcm_token'];
        $customer->save();

        return $this->respond([

                'error' => false,
                'status' => 'success',
                'status_code' => $this->getStatusCode(),
                'message' => 'Update successful!',

            ]);
    }
}
