<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\solicitud_renta;

use App\vehiculo;

use App\user;

use Laracasts\Flash\Flash;


class RentasController extends Controller
{
    
    public function index(){
        $solicitud_renta = solicitud_renta::orderBy('id', 'ASC')->paginate(8);
        return view('vistas.admin.rentas.index')->with('solicitud_renta', $solicitud_renta);
    }


    public function rentasIndex(){
        $usuario = User::where('usuario',  $_COOKIE['name'] )->first();
        $solicitud_renta = solicitud_renta::where('licencia_user', $usuario->numero_licencia)->orderBy('id', 'ASC')->paginate(8);
        return view('vistas.cliente.rentas.index')->with('solicitud_renta', $solicitud_renta);
    }

    public function create($id){
    	$vehiculo = vehiculo::find($id);
    	return view('vistas.admin.rentas.create')->with('vehiculo', $vehiculo);
    }

    public function store(Requests $request){

    }

    public function createRenta($id){
    	$vehiculo = vehiculo::find($id);
    	return view('vistas.admin.rentas.create')->with('vehiculo', $vehiculo);
    }

    public function storeRenta(Request $request, $id){
    	$usuario = User::where('numero_licencia', $request->numero_licencia)->first();
    	if ($usuario->tipo == 'admin') {
    		Flash::error("No se permite realizar solicitudes de renta a los administradores");
    		return redirect()->route('admin.vehiculos.index');
    	}else{
	    	$vehiculo = vehiculo::find($id);
	    	if ($vehiculo->diponibilidad == true) {
	    		Flash::error("No se permite realizar solicitudes de renta a vehiculos no disponibles");
    			return redirect()->route('admin.vehiculos.index');
	    	}else{
		    	$renta = new solicitud_renta();
		    	$renta->fecha_renta = $request->fecha_renta;
		    	$renta->hora_renta =  $request->hora_renta;
		    	$renta->user_id = $usuario->id;
		    	$renta->vehiculo_id = $vehiculo->id;
		    	$renta->licencia_user = $usuario->numero_licencia;
		    	$vehiculo->disponibilidad = false;
		    	$vehiculo->save();
			    $renta->save();
		        Flash::success("La renta para ".$usuario->nombre." ".$usuario->apellido." se ha creado exitosamente.");
		        return redirect()->route('admin.rentas.index');
		    }
	    }
    }

    public function destroy($id){
        $renta = solicitud_renta::find($id);
        $renta->delete();
        $vehiculo = vehiculo::find($renta->vehiculo_id);
        $vehiculo->disponibilidad = true;
    	$vehiculo->save();
        Flash::warning('La renta ha sido borrado de forma exitosa!');
        return redirect()->route('admin.rentas.index');
    }

     public function edit($id){
         $renta = solicitud_renta::find($id);
         return view('vistas.admin.rentas.edit')->with('renta', $renta);
    }

    public function update(Request $request, $id)
    {
        $renta = solicitud_renta::find($id);
        $renta->hora_renta = $request->hora_renta;
        $renta->fecha_renta = $request->fecha_renta;
        $renta->save();
        Flash::warning('La renta ha sido editada de forma exitosa');
        return redirect()->route('admin.rentas.index');
    }
}
