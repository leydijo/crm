<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\App;
use App\Models\Order;
use App\Models\NewUser;

class VentasPdfController extends Controller
{
    public function exportPdf()
    {


       $ventausers = NewUser::all();
       //d($ventauser);
       
       $pdf = PDF::loadView('ventas.ventasPdf', compact('ventausers'));

       $pdf->setPaper('a4', 'landscape');

        return $pdf->stream();
       
        
    }
}
