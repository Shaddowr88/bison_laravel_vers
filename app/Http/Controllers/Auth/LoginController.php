<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Composer\DependencyResolver\Request;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//    public function loginBison(Request $request)
//    {
//        $email = $request->email;
//        $password = $request->password;
//        $user = User::all(['email'=>$email,'password'=>$password]);{
//            return $user();
//        };
////        dd($user);
//    }
//




  public function loginBison(Request $request)
  {
      $email = $request->email;
      $password = $request->password;
      if(Auth::attempt(['email'=>$email,'password'=>$password])){
//           Reccuperer l'utilisateur connecté'
          $user = Auth::user();
//        dd($user);
          if($user->hasRole('Administrateur')) {
//            return route(redirect('backend_homepage'));
              return redirect()->route('backend_homepage');
          } else {
              return redirect()->route('homepage');
          }
      }else{
          return redirect()->route('login')->with('messages','impossible de vous identifier');
      }
  }
}
