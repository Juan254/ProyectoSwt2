<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Barryvdh\DomPDF\PDF;

use App\Http\Controllers\App;

use App\solicitud_renta;

use App\vehiculo;

use App\user;

use App\factura;


class PdfController extends Controller
{
    //

    public function generateReport(){

    	$solicitud_renta = solicitud_renta::all();

		$pdf = \PDF::loadView('vistas.admin.pdf.reporte', [ 'solicitud_renta' => $solicitud_renta ]);
		return $pdf->download('Lista de reportes.pdf');

    }


    public function generateFactura($id){
    	$factura = factura::where('solicitud_renta_id', $id)->first();
    	$solicitud_renta = solicitud_Renta::find($id);
    	$usuario = User::where('id', $solicitud_renta->user_id )->first();
    	$pdf = \PDF::loadView('vistas.admin.pdf.factura', [ 'factura' => $factura, 'usuario' => $usuario ]);
		return $pdf->download('factura_'.$factura->id.'.pdf');
    }	
}
