<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\vehiculo;

use Laracasts\Flash\Flash;

use App\Http\Requests\VehiculoRequest;

class VehiculosController extends Controller
{
    public function index(){
        try{
            $vehiculos = vehiculo::orderBy('id', 'ASC')->paginate(8);
            return view('vistas.admin.vehiculos.index')->with('vehiculos', $vehiculos);
        }catch(Exception $e){
             Flash::error('No hay vehiculos ingresados en la BD.');
            return redirect()->route('admin.vehiculos.index');
        }
    }


    public function create(){
    	return view('vistas.admin.vehiculos.create');
    }

    public function store(VehiculoRequest $request){
    
    	$vehiculo = new vehiculo($request->all());
		$vehiculo->disponibilidad = true;
        $vehiculo->precio_hora = $request->precio_hora;
		$vehiculo->save();
        Flash::success("El vehiculo se ha registrado existosamente.");
        return redirect()->route('admin.vehiculos.index');
    }

     /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $vehiculo = vehiculo::find($id);
        $vehiculo->color = $request->color;
        $vehiculo->kilometraje = $request->kilometraje;
        $vehiculo->precio_hora = $request->precio_hora;
        $vehiculo->save();
        Flash::warning('El vehiculo '. $vehiculo->placa  . ' ha sido editado con exito!');
        return redirect()->route('admin.vehiculos.index');
    }

    public function destroy($id){
        $vehiculo = vehiculo::find($id);
        $vehiculo->delete();

        Flash::warning('El vehiculo '. $vehiculo->placa  . ' ha sido borrado de forma exitosa!');
        return redirect()->route('admin.vehiculos.index');
    }

    public function edit($id){
         $vehiculo = vehiculo::find($id);
         return view('vistas.admin.vehiculos.edit')->with('vehiculo', $vehiculo);
    }


}
