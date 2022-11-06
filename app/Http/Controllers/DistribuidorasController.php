<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\distribuidoras;

class DistribuidorasController extends Controller
{

    public function index()
    {
        // Validate the request...
 
        $proveedor = distribuidoras::all();
 
        return $proveedor;
    }

    public function getSelect()
    {
        // Validate the request...
 
        $proveedor = distribuidoras::select('id','nombre')->get()git;
        
        return ['data'=>$proveedor];
    }

    public function guardarDistri(Request $request)
    {
        // Validate the request...
 
        $proveedor = new distribuidoras;
 
        $proveedor->nombre = $request->nomDistri;
        $proveedor->razonSocial = $request->razSocial;
        $proveedor->numeroContacto = $request->numContac;
        $proveedor->ciudad = $request->city;
 
        $proveedor->save();
    }
    //controlador: actualizacion de Datos
    public function update(Request $request)
    {
        // Validate the request...
 
        $proveedor = distribuidoras::find($request->id);
 
        $proveedor->nombre = $request->nomDistri;
        $proveedor->razonSocial = $request->razSocial;
        $proveedor->numeroContacto = $request->numContac;
        $proveedor->ciudad = $request->city;
 
        $proveedor->save();
    }
    // Controlador: Eliminar Datos    
    public function destroy(Request $request)
    {
        $proveedor = distribuidoras::find($request->id);
        $proveedor->delete();
    }
}
