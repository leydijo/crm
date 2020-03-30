<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash; 
use App\Models\NewUser;
use App\Models\StateOrder;  
use App\Models\Brand;  
use App\Models\StateTeni;  
use App\Models\Product; 
use App\Models\Order;
use App\Models\OrdersRegisterUser;
use Redirect;



class AddProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //cambiar que direccione a consultar producto
        //return view('users.create');
         $user=new NewUser();
         $estadopedido = StateOrder::all();
        $getUserById=$user->getUserById($request->get("user", 'estadopedido'));

        //dd($user);

       return view('consultarproducto.consultarproductos', compact('getUserById', 'estadopedido'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // lista y trae informacion
  

       $user = NewUser::find($request->get('user'));


        //lista de producto
        $productos = Product::all();

         //lista de marcas
         $tipoMarcas = Brand::all(); 

        //estado de los tenis
        $estadoTenis = StateTeni::all();

        //estado del producto
        $estadoOrders = StateOrder::all();

        //dd($request);
        return view('createproducto.addproducto', compact('user','productos','tipoMarcas', 'estadoTenis', 'estadoOrders'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $productos= Order::create($request->all());

      flash('Se ha creado el producto/servicio  ' .  $productos->register_user_id. " corectamente" )->success();
       return Redirect::to('usuario');
     


   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = NewUser::find($id);
        $orderregister =  OrdersRegisterUser::find($id);
        return view('createproducto.addproducto', compact('user'));
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
        $user = Order::find($id);
        return 'ff';
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
