<?php

namespace hotelMoche\Http\Controllers;

use Illuminate\Http\Request;
use hotelMoche\Http\Requests;
use hotelMoche\Http\Requests\UserCreateRequest;
use hotelMoche\Http\Requests\UserUpdateRequest;
use hotelMoche\Http\Controllers\Controller;

use hotelMoche\User;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth' );
        $this->middleware('admin' , ['only' => ['create','edit'] ] );
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
        $users = User::paginate(5);
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    public function buscaDNI($valor)
    {
        $users = DB::table('users')->where('dni',$valor)->get();
        return response()->json(
            $users
        );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create( $request->all() );
        Session::flash('message','Usuario creado correctamente');
        #return redirect('/usuario')->with('message','store');
        return redirect::to('/usuario');
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
        return view('usuario.edit',['user'=> $this->usuario ]);
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
        $this->usuario->fill($request->all());
        $this->usuario->save();

        Session::flash('message','Usuario editado correctamente');
        return redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->usuario->delete();
        Session::flash('message','Usuario eliminado correctamente');
        return redirect::to('/usuario');
    }
}
