<?php 

class LoginController extends BaseController {
 

    public function doLogin()
    {

        $rules = ['username'=>'required','password'=>'required'];

        $credentials = array(
          'username' => Input::get('username'),
          'password' => Input::get('password')
        );


        $validation = Validator::make($credentials, $rules);

        if($validation->fails()){

            return Redirect::back()
            ->withInput()
            ->withErrors($validation);

        }
        else{

            if (Auth::attempt($credentials))
            {
                return Redirect::intended('admin');
            }
            else{
                return Redirect::to('login')->withErrors(['Wrong Username or Password']);
            }
        }
        
    }
 
    public function doLogOut()
    {
        Auth::logout();
 
        return Redirect::to('/login');
    }
 
}
