<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $usuarioFacebook = Socialite::driver('facebook')->user();

        $procuraUsuario = User::where('email',$usuarioFacebook->email)->first();

        if ($procuraUsuario) {
            Auth::login($procuraUsuario);
            return redirect('/');
        }else{
            $user = new User;
            $user->name = $usuarioFacebook->name;
            $user->email = $usuarioFacebook->email;
            $user->password = bcrypt(123456);
            $user->save();
            Auth::login($user);
            return redirect('/');
        }
    }
}
