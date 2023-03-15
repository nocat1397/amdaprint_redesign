<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
  
    protected function authenticated() {
        if (Auth::check()) {
            // dd(Auth::user()->role->name);
            // exit;
            $role = Auth::user()->role->name;
            
            switch ($role) {
                case 'Admin':
                    return redirect('/home');
                break;
                case 'Customer':
                    // Auth::logout();
                    return redirect('//'.env('DOMAIN'));
                break;
            }
            // return redirect()->route('chcking');
        }
    }

    // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
       * Get the needed authorization credentials from the request.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return array
       */
      protected function credentials(Request $request)
      {
        if(is_numeric($request->get('email'))){
          return ['mobile'=>$request->get('email'),'password'=>$request->get('password')];
          
        }
        elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
          return ['email' => $request->get('email'), 'password'=>$request->get('password')];
        }
            
       }
     
       /*
       * Method override to send correct error messages
       * Get the failed login response instance.
       *
       * @param \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      protected function sendFailedLoginResponse(Request $request)
      {
  
          if ( ! User::where('email', $request->email)->first() ) {
              return redirect()->back()
                  ->withInput($request->only($this->username(), 'remember'))
                  ->withErrors([
                      $this->username() => Lang::get('auth.email'),
                  ]);
          }
  
          if ( ! User::where('email', $request->email)->where('password', bcrypt($request->password))->first() ) {
              return redirect()->back()
                  ->withInput($request->only($this->username(), 'remember'))
                  ->withErrors([
                      'password' => Lang::get('auth.password'),
                  ]);
          }
  
      }
      
}
