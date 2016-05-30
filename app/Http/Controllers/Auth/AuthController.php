<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Laracasts\Flash\Flash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usuario' => 'required|max:255|unique:users',
            'contraseña' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'usuario' => $data['usuario'],
            'contraseña' => bcrypt($data['contraseña']),
        ]);
    }

    protected function getLogin(){
        return view('vistas.admin.auth.login');
    }


    protected function postLogin(Request $request){
        $usuario = User::where('usuario', $request->usuario)->first();
        $pass = $request->contraseña;
        if ( $usuario == null || !password_verify($pass, $usuario->contraseña)) {
           Flash::error('El nombre de usuario o contraseña es incorrecto');
           return view('vistas.admin.auth.login');
        }else{
            setcookie("chsm","logedin",time()+3600,"/","localhost");
            setcookie("name",$usuario->usuario ,time()+3600,"/","localhost");   
            if($usuario->tipo == 'admin') {
                return view('vistas.admin.inicioAdmin');
           }else{
                return view('vistas.cliente.inicioUsuario');
           }
        }
    } 

    protected function getLogout(){
        setcookie("chsm","",time()-3600,"/","localhost");
        setcookie("name","",time()-3600,"/","localhost");
        Flash::success('Se ha cerrado sesión de '. $_COOKIE['name'] .' satisfactoriamente');
        return view('vistas.admin.auth.login');
    }
}   
