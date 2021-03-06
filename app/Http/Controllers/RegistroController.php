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
        $mail_fake = '';
        $mail_fake = rand(0,9999).'_'.$request['dni'].'@mail.com';
        $fechaInicio        = '';
        $fechaFin           = '';
        $fecha_hora_inicio  = array();
        $fecha_hora_fin     = array();
        #
        $hora_inicio        = array();
        $hora_fin           = array();
        #
        #
        $fecha_hora_inicio  = $request['inicio_servicio'];
        $fecha_hora_fin     = $request['fin_servicio'];
        #
        list($dia,$mes,$anio)   = explode($fecha_hora_inicio[0], "/");
        $fecha_hora_inicio      = $anio.'-'.$mes.'-'.$dia.' '.$fecha_hora_inicio[1];
        #
        list($dia,$mes,$anio)   = explode($fecha_hora_fin[0], "/");
        $fecha_hora_fin         = $anio.'-'.$mes.'-'.$dia.' '.$fecha_hora_fin[1];
        #
        $user = User::create([
            'nombre'    => $request['nombre'],
            'apellidos' => $request['apellidos'],
            'dni'       => $request['dni'],
            'email'     => $mail_fake,
            'password'  => '',
            'tipo'      => 'normal'
        ]);
        $idUsuario = 0;
        $idUsuario = $user->id;

        if( $request->ajax() )
        {
            return response()->json([
                "mensaje" => 'id de usuario: '.$idUsuario
            ]);
        }
        #"mensaje" => $request->all()
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
