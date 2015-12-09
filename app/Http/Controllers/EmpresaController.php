<?php

namespace hotelMoche\Http\Controllers;

use Illuminate\Http\Request;
use hotelMoche\Http\Requests;
use hotelMoche\Http\Requests\EmpresaUpdateRequest;
use hotelMoche\Http\Requests\EmpresaCreateRequest;
use hotelMoche\Http\Controllers\Controller;

use hotelMoche\empresa;
use Illuminate\Routing\Route;
use Session;
use Redirect;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth' );
        $this->middleware('empre' , ['only' => ['create','edit'] ] );
        $this->beforeFilter('@find', [ 'only' => ['edit','update','destroy'] ] );
    }
    public function find( Route $route )
    {
        $this->empresa = empresa::find( $route->getParameter('empresa') );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = empresa::paginate(5);
        return view('empresa.index',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaCreateRequest $request)
    {
        empresa::create( $request->all() );
        session::flash('message','Empresa creada correctamente');
        return redirect::to('/empresa');
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
        return view('empresa.edit',[ 'empresa' => $this->empresa ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaUpdateRequest $request, $id)
    {
        $this->empresa->fill( $request->all() );
        $this->empresa->save();

        session::flash('message','Empresa editada correctamente');
        return redirect::to('/empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->empresa->delete();
        Session::flash('message','Empresa eliminada correctamente');
        return redirect::to('/empresa');
    }
}
