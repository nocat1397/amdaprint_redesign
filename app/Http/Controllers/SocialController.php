<?php

namespace App\Http\Controllers;

use Socialite;
use App\User;
use App\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
   //
   public function fb_redirect()
   {
       return Socialite::driver('facebook')->redirect();
   }

   public function fb_callback()
   {
       $userSocial = Socialite::driver('facebook')->stateless()->user();

       $users = User::where(['email' => $userSocial->getEmail()])->first();        
       if($users) {
           Auth::login($users);
           return redirect('/');
       } else{
           $user = User::create([
               'name'=> (explode(' ',$userSocial->name)[0] ? explode(' ',$userSocial->name)[0] : '').' '.(explode(' ',$userSocial->name)[1] ? explode(' ',$userSocial->name)[1] : ''),
               'email' => $userSocial->getEmail(),
               'password'=>Hash::make($userSocial->getEmail())
           ]);

        return redirect('/');
       }
   }
   public function google_redirect()
   {
       return Socialite::driver('google')->redirect();
   }

   public function google_callback()
   {
       $userSocial = Socialite::driver('google')->stateless()->user();

       $users = User::where(['email' => $userSocial->getEmail()])->first();        
       if($users) {
           Auth::login($users);
           return redirect('/');
       } else{
           $user = User::create([
               'name'=> (explode(' ',$userSocial->name)[0] ? explode(' ',$userSocial->name)[0] : '').' '.(explode(' ',$userSocial->name)[1] ? explode(' ',$userSocial->name)[1] : ''),
               'email' => $userSocial->getEmail(),
               'password' => Hash::make($userSocial->getEmail())
           ]);

        return redirect('/');
       }
   }
}
