<?php

namespace hotelMoche\Http\Controllers;

use Illuminate\Http\Request;
use hotelMoche\Http\Requests\RegistroCreateRequest;
use hotelMoche\Http\Requests;
use hotelMoche\Http\Controllers\Controller;

use hotelMoche\User;
use hotelMoche\habitacion;
use Illuminate\Routing\Route;
use Session;
use Redirect;

class RegistroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth' );
        $this->beforeFilter('@find', [ 'only' => ['edit','update','destroy'] ] );
    }
    public function find( Route $route )
    {
        $this->usuario = User::find( $route->getParameter('usuario') );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #$users = User::paginate(5);
        $habitaciones = habitacion::all();
        return view('registro.index',compact('habitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        #$habitaciones = habitacion::lists('numero','idHabitacion');
        #return view('registro.create')->with('habitaciones',$habitaciones);
        $habitaciones = habitacion::all();
        return view('registro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*User::create( $request->all() );
        Session::flash('message','Usuario creado correctamente');
        return redirect::to('/registro');*/
        if( $request->ajax() )
        {
            return response()->json([
                "mensaje" => $request->all()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Para ver los datos guardados
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar el registro de la habitación
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
