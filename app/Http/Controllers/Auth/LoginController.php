<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use Socialite;
use Mail;
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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check() && Auth::user()->role == 1) {
            $this->redirectTo = route('home');
        } else {
            $this->redirectTo = route('user.dashboard');
        }
        $this->middleware('guest')->except('logout');
    }




    public function socialLogin($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($social)
    {
        $userSocial = Socialite::driver($social)->user();

        $user = User::where(['email' => $userSocial->getEmail()])->first();
        if ($user) {
            Auth::login($user);
            return redirect(Route('user.dashboard'));
        } else {

            $user = new User;
            $user->role = 2;
            $user->name = $userSocial->getName();
            $user->email = $userSocial->getEmail();
            $user->image = $userSocial->getAvatar();
            $user->provider_id = $userSocial->getId();
            $user->provider = $social;
            $user->save();
            
            Auth::login($user, true);
            
            $info = array(
            'email' => $userSocial->getEmail()
             );

            Mail::send('frontend.email.registration',$info, function($message) use($info) {
                $message->from('imranahmed.developer@gmail.com', 'Developer Imran');
                $message->to($info['email']);
                $message->subject('Thank you so much for registering on my website!');
            });
        
            return redirect('user/dashboard');
        }
    }
}
