<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Area;
use App\Models\Role;
use Illuminate\Http\Request;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = Empleado::search();
        //dd($empleado);
        return view("empleados.index",compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $area = Area::all();
        $roles = Role::all();
        return view("empleados.create",compact('area', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'sexo' => 'required',
            'area_id' => 'required|int',
            'descripcion' => 'required'
        ]);

        if($request->boletin != "SI"){
            
            $boletinValidado = "NO";

        }else{

            $boletinValidado = "SI";
        }

        $empleado = Empleado::create([
            'nombre' =>$request['nombre'],
            'email' =>$request['email'],
            'sexo' =>$request['sexo'],
            'area_id' =>$request['area_id'],
            'descripcion' =>$request['descripcion'],
            'boletin' =>$boletinValidado

        ]);    
        $empleado->rolesM()->sync($request->get('id'));
        
        return redirect('empleados')->with('crearEmpleado','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        $area = Area::all();
        $roles = Role::all();

        return view('empleados.edit',[
            'empleado' => $empleado,
            'area' => $area,
            'roles' => $roles 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->boletin != "SI"){
            
            $boletinValidado = "NO";

        }else{

            $boletinValidado = "SI";
        }

        $empleado = Empleado::where('id','=',$id)->update([
            'nombre' =>$request['nombre'],
            'email' =>$request['email'],
            'sexo' =>$request['sexo'],
            'area_id' =>$request['area_id'],
            'descripcion' =>$request['descripcion'],
            'boletin' =>$boletinValidado
        ]);

        return redirect('empleados')->with('editarEmpleado','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('empleados')->with('eliminadoEmpleado','ok');
    }
}