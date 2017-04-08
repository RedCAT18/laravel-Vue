<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function doLogin(Request $request){
//        dd($request);
        try{
            $credentials = [
                'email'=> $request->email,
                'password' => $request->password
            ];
            $validator = \Validator::make($credentials, [
                    'email'=> 'required',
                    'password'=>'required'
                ],[
                'email.required'=> '이메일을 입력해 주십시오',
                'password.required'=> '비밀번호를 입력해 주십시오.'
            ]);

            $rst = '';

            if($validator->fails()){
                return $rst = $validator->errors();
            }

            //cf. \Auch::check() : 입력된 맞는지 아닌지 확인 ->true/false를 리턴
            if(! \Auth::attempt($credentials)){ //attempt: 로그인 시도하는 함수
                return $rst = 'fail';
            }
            return $rst = 'success';


        } catch (\Exception $e) {
            return $e->getLine().":".$e->getMessage();
        }
    }
}
