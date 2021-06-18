<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\areas;
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
        $empleado = Empleado::all();
        return view("empleados.index",compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $area = areas::all();
        return view("empleados.create",compact('area'));
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

        $empleado = new Empleado();
        $empleado->create([
            'nombre' =>$request['nombre'],
            'email' =>$request['email'],
            'sexo' =>$request['sexo'],
            'area_id' =>$request['area_id'],
            'descripcion' =>$request['descripcion'],
            'boletin' =>$request['boletin']
        ]);

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
        $area = areas::all();

        return view('empleados.edit',compact('empleado','area'));
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
        $datosEmpleado = request()->except(['_token','_method']);
        Empleado::where('id','=',$id)->update($datosEmpleado);
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
