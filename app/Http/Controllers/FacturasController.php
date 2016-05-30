<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\solicitud_renta;

use App\vehiculo;

use App\user;

use App\factura;

use Laracasts\Flash\Flash;


class FacturasController extends Controller
{
    //
    public function devolucion($id){
        $solicitud_renta = solicitud_renta::find($id);
        return view('vistas.admin.facturas.create')->with('solicitud_renta', $solicitud_renta);
    }

    public function storeFactura(Request $request, $id){
    	$renta = solicitud_renta::find($id);
    	$usuario = User::where('numero_licencia', $renta->licencia_user)->first();
    	$vehiculo = vehiculo::find($renta->vehiculo_id);
    	$valor_bono = 0;
    	if ($vehiculo->kilometraje <= $request->kilometraje) {
    		$your_date = strtotime($renta->fecha_renta); // or your date as well
			$now = strtotime($request->fecha_factura);
			$hour_now = strtotime($request->hora_factura);
			$your_hour = strtotime($renta->hora_renta);
			if ($your_date <= $now) {
				$datediff = $now - $your_date;
				$horas = floor(abs((($datediff/(60*60)))));
				$horas2= ($hour_now - $your_hour)/(60*60);
				$horas = $horas + $horas2;
				$acumuladas = $horas + $usuario->horas_acumuladas;
				if ($usuario->bono == 1) {
					$usuario->bono = 0;
					$valor_bono = 50000;
				}elseif ( $acumuladas >= 100) {
					$usuario->bono= 1;
				}
				$usuario->horas_acumuladas = $acumuladas;
				$vehiculo->kilometraje=$request->kilometraje;
				$vehiculo->disponibilidad = true;
				$renta->estado=true; 
				$usuario->save();
				$vehiculo->save();
				$renta->save();
				$factura = new factura();
				$factura->fecha_factura=$request->fecha_factura;
				$factura->descripcion=$request->descripcion;
				$factura->valor_total=($horas * (int) $vehiculo->precio_hora) - $valor_bono;
				if ($factura->valor_total < 0) {
					$factura->valor_total = 0;
				}
				$factura->solicitud_renta_id=$renta->id;
				$factura->save(); 
		        Flash::success("La factura para ".$usuario->nombre." ".$usuario->apellido." se ha creado exitosamente.");
		        return redirect()->route('admin.rentas.index');
			}else{
				Flash::error("La fecha ingresada de la facturación es menor a la fecha de alquiler.");
    			return redirect()->route('vistas.admin.facturas.devolucion', $renta->id);
			}

    	}else{
    		Flash::error("El kilometraje ingresado es menor al del vehiculo cuándo se hizo el alquiler.");
    		return redirect()->route('vistas.admin.facturas.devolucion', $renta->id);
    	}
    }

}
