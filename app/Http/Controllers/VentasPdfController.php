<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\App;
use App\Models\NewUser;
use App\Models\StateOrder;  
use App\Models\Brand;  
use App\Models\StateTeni;  
use App\Models\Product; 
use App\Models\Order;
use App\Models\OrdersRegisterUser;


class VentasPdfController extends Controller
{
    public function exportPdf(Request $request)
    {
        $user=new NewUser();
        $estadopedido = StateOrder::all();
        $orders = Order::all();
        $getUserById=$user->getUserById($request->get("user", 'estadopedido', 'orders'));

       //dd($user);

      return view('ventas.ventasPdf', compact('getUserById', 'estadopedido', 'orders'));

        
        //dd($getUserById);
       
       $pdf = PDF::loadView('ventas.ventasPdf');

       $pdf->setPaper('a4', 'landscape');

        return $pdf->stream();
       


      
        
    }


    public function index(Request $request)
    {
        $user=new NewUser();
         $estadopedido = StateOrder::all();
        $getUserById=$user->getUserById($request->get("user", 'estadopedido'));

        //dd($user);

       return view('ventas.ventasPdf', compact('getUserById', 'estadopedido'));

    }
}
