<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Guia;
use App\Docente;
use App\Laboratorio;
use App\Materia;
use App\Periodo;
use App\Session;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class GuiaController extends Controller {


	public function listarGuias()
	{
			//$materia = Session::get('materia');
			$materia="504";
			$guias_terminadas=DB::select('select guia.GUI_CODIGO,materia.MAT_ABREVIATURA, guia.GUI_NUMERO,guia.GUI_FECHA, guia.GUI_TEMA, laboratorio.LAB_NOMBRE from laboratorio,guia,materia where materia.MAT_CODIGO=guia.MAT_CODIGO and laboratorio.LAB_CODIGO=guia.LAB_CODIGO and guia.MAT_CODIGO='.$materia );
			$guias_pendientes=DB::select('select control.CON_DIA,control.CON_EXTRA,control.CON_HORA_ENTRADA, control.CON_HORA_SALIDA,control.CON_NUMERO_HORAS,control.CON_GUIA from control where control.CON_GUIA IS NULL and control.MAT_CODIGO='.$materia);
			$pendietes=0;
			foreach ($guias_pendientes as $pen ){
				if ($pen->CON_GUIA!=1 & $pen->CON_EXTRA!=1 ){
					$pendietes++;
				}
			}

			return view('guia.guiaControl')->with('guias_terminadas', $guias_terminadas)->with('guias_pendientes', $guias_pendientes)->with('pendientes',$pendietes);
	}
	public function edit($id)
	{
		//
		$guia= Guia::find($id);
		return view('guia.update', ['guia' => $guia]);
	}

	public function update(Request $request)
	{
		$guia = Guia::find($request['GUI_CODIGO']);
		$guia->fill($request->all());
		$guia->save();
		return redirect('guia')
			->with('title', 'Guia actualizada!')
			->with('subtitle', 'La información de la guia se ha actualizado con éxito.');
	}

	public function destroy($id)
	{
		$guia = Guia::destroy($id);
		DB::update('UPDATE CONTROL SET control.CON_GUIA=NULL WHERE control.CON_GUIA='.$id);
		return redirect('guia')
			->with('title', 'Guia Eliminado!')
			->with('subtitle', 'El registro de la Guia se ha eliminado con éxito.');
	}

	
}
