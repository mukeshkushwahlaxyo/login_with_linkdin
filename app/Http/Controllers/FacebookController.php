<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $create['name'] = $user->getName();
            $create['email'] = $user->getEmail();
            $create['facebook_id'] = $user->getId();
            $create['password']    = md5($user->getName());

            $userModel = new User;
            $createdUser = $userModel->addNew($create);
            Auth::loginUsingId($createdUser->id);

           return redirect()->route('home');

        } catch (Exception $e) {
            return redirect('auth/facebook');
        }

    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {   
    	//try {
            $user = Socialite::driver('google')->stateless()->user();
           
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('/home');
            }else{
            	$user1 = new User;
                $user1->name = $user->getName();
                $user1->email = $user->getEmail();
                $user1->google_id = $user->getId();
                $user1->password = md5($user->getName());
                $user1->save();
                Auth::loginUsingId($user1->getAuthIdentifier());
                return redirect('/home');
            }

  

       // } catch (Exception $e) {
       //	dd('error');
        //    return redirect('auth/google');

       // }

    }
}
