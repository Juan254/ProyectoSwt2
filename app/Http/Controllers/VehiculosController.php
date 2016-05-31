<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\vehiculo;

use Laracasts\Flash\Flash;

use App\Http\Requests\VehiculoRequest;

use App\file;

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

    public function clientesIndex(){
        $vehiculos = vehiculo::orderBy('id', 'ASC')->paginate(8);
        return view('vistas.cliente.vehiculos.index')->with('vehiculos', $vehiculos);
    }

    public function extra($id){
        $vehiculo = vehiculo::find($id);
        return view('vistas.cliente.vehiculos.extra')->with('vehiculo', $vehiculo);
    }

    public function create(){
    	return view('vistas.admin.vehiculos.create');
    }

    public function store(VehiculoRequest $request){
    
        if ($request->file('Archivo')) {
    	$vehiculo = new vehiculo($request->all());
		$vehiculo->disponibilidad = true;
        $vehiculo->precio_hora = $request->precio_hora;
		$vehiculo->save();
        $file = $request->file('Archivo');
        $name=$vehiculo->id .'.png';
        $path = public_path(). '/images/vehiculos/';
        $file->move($path,$name);
        Flash::success('El vehiculo '. $vehiculo->placa  . ' ha sido creado con exito!');
        return redirect()->route('admin.vehiculos.index');
        }else{
            Flash::error('Debe de ingresar una foto del vehiculo');
            return redirect()->route('admin.vehiculos.create');
        }
    }

     /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(request $request, $id){
            if ($request->file('Archivo')) {
            $vehiculo = vehiculo::find($id);
            $vehiculo->color = $request->color;
            $vehiculo->kilometraje = $request->kilometraje;
            $vehiculo->precio_hora = $request->precio_hora;
            $file1 = \File::delete(public_path(). '/images/vehiculos/'.$vehiculo->id.'.png');
            $file = $request->file('Archivo');
            $name=$vehiculo->id .'.png';
            $path = public_path(). '/images/vehiculos/';
            $file->move($path,$name);
            $vehiculo->save();
            Flash::warning('El vehiculo '. $vehiculo->placa  . ' ha sido editado con exito!');
            return redirect()->route('admin.vehiculos.index');
        }else{
            Flash::error('Debe de ingresar una foto del vehiculo');
            return redirect()->route('admin.vehiculos.edit');
        }

    }

    public function destroy($id){
        $vehiculo = vehiculo::find($id);
        $file = \File::delete(public_path(). '/images/vehiculos/'.$vehiculo->id.'.png');
        $vehiculo->delete();

        Flash::warning('El vehiculo '. $vehiculo->placa  . ' ha sido borrado de forma exitosa!');
        return redirect()->route('admin.vehiculos.index');
    }

    public function edit($id){
         $vehiculo = vehiculo::find($id);
         return view('vistas.admin.vehiculos.edit')->with('vehiculo', $vehiculo);
    }


}
