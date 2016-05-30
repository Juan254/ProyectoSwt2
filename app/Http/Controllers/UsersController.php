<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Laracasts\Flash\Flash;

use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
     public function index(){
        $users = User::orderBy('id', 'ASC')->paginate(8);
        return view('vistas.admin.users.index')->with('users', $users);
    }


    public function create(){
    	return view('vistas.admin.users.create');
    }

    public function store(UserRequest $request){
        $user= new User($request->all());
        if ($request->contraseña == $request->contraseñaRepetir) {
            $user->contraseña = bcrypt($request->contraseña);
            if ($request->tipo == 'admin') {
                $user->tipo = $request->tipo;
            }
            $user->save();
            $users = User::orderBy('id', 'ASC')->paginate(8);
            Flash::success("El usuario ".$user->usuario." se ha registrado existosamente.");
            return redirect()->route('admin.users.index');
        }else{
            
            Flash::error('Las contraseñas no coinciden.');
            return redirect()->route('admin.users.create');
           
        }  	    
    }

    public function delete (){

        
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        Flash::warning('El usuario '. $user->nombre . ' '. $user->apellido . ' ha sido borrado de forma exitosa!');
        return redirect()->route('admin.users.index');
    }
}
