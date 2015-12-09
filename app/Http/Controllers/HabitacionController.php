<?php

namespace hotelMoche\Http\Controllers;

use Illuminate\Http\Request;
use hotelMoche\Http\Requests;
use hotelMoche\Http\Requests\HabitacionCreateRequest;
use hotelMoche\Http\Requests\HabitacionUpdateRequest;
use hotelMoche\Http\Controllers\Controller;

use hotelMoche\habitacion;
use Illuminate\Routing\Route;
use Session;
use Redirect;

class HabitacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth' );
        $this->middleware('habit' , ['only' => ['create','edit'] ] );
        $this->beforeFilter('@find', [ 'only' => ['edit','update','destroy'] ] );
    }
    public function find( Route $route )
    {
        $this->habitacion = habitacion::find( $route->getParameter('habitacion') );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones = habitacion::paginate(5);
        return view('habitacion.index',compact('habitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HabitacionCreateRequest $request)
    {
        habitacion::create( $request->all() );
        Session::flash('message','Habitacion creada correctamente');
        return redirect::to('/habitacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('habitacion.edit',['habitacion'=>$this->habitacion ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HabitacionUpdateRequest $request, $id)
    {
        $this->habitacion->fill( $request->all() );
        $this->habitacion->save();

        Session::flash('message','Habitacion actualizada correctamente');
        return redirect::to('/habitacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->habitacion->delete();
        Session::flash('message','Habitacion eliminada correctamente');
        return redirect::to('/habitacion');
    }
}
