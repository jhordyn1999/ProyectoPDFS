<?php

namespace App\Http\Controllers;

use App\BancaPapayita;
use Illuminate\Http\Request;
use PDF;
class BancaPapayitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu');
    }
   /*  public function index1()
    {
        return view('portada');
    }
    public function index2()
    {
        return view('pdf2');
    }
    public function index3()
    {
        return view('pdf3');
    }
    public function index4()
    {
        return view('pdf4');
    }
    public function index5()
    {
        return view('pdf5');
    }
    public function index6()
    {
        return view('pdf6');
    }
    public function index7()
    {
        return view('pdf7');
    }
    public function index8()
    {
        return view('pdf8');
    }
    public function index9()
    {
        return view('pdf9');
    }
    public function index10()
    {
        return view('pdf10');
    }
    public function index11()
    {
        return view('pdf11');
    }
    public function index12()
    {
        return view('pdf12');
    }
    public function index13()
    {
        return view('pdf13');
    }
    public function index14()
    {
        return view('pdf14');
    } 
     public function index15()
    {
        return view('pdf15');
    }
    public function index16()
    {
        return view('pdf16');
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function generarpdf1(){
      
        $pdf = PDF::loadView('portada');
  
        return $pdf->download('Declaracion-Juradas-Fondos.pdf');
     }

     public function generarpdf2(){
      
        $pdf = PDF::loadView('pdf2');
  
        return $pdf->download('Autorizacion-datos-personales.pdf');
     }

     public function generarpdf3(){
        $pdf = PDF::loadView('pdf3');
  
        return $pdf->download('Credito-Clausula-Testigo-Ruego.pdf');
     }
     
     public function generarpdf4(){
        $pdf = PDF::loadView('pdf4');
        return $pdf->download('Solicitud-Credito-Natural.pdf');
     }
     public function generarpdf5(){
        $pdf = PDF::loadView('pdf5');
        return $pdf->download('Contratos-Servicios-Financieros.pdf');
     }
     public function generarpdf6(){
        $pdf = PDF::loadView('pdf6');
        return $pdf->download('Cartilla-Informacion-Depósito-Fijo.pdf');
     }
     public function generarpdf7(){
        $pdf = PDF::loadView('pdf7');
        return $pdf->download('Declaración-Jurada-Beneficiarios.pdf');
     }
     public function generarpdf8(){
        $pdf = PDF::loadView('pdf8');
        return $pdf->download('Contrato-Servicios-Descuento-Planilla.pdf');
     }
     public function generarpdf9(){
        $pdf = PDF::loadView('pdf9');
        return $pdf->download('Carta-Autorizacion-Descuento.pdf');
     }
     public function generarpdf10(){
        $pdf = PDF::loadView('pdf10');
        return $pdf->download('Hoja-Resumen-Informativa.pdf');
     }
     public function generarpdf11(){
        $pdf = PDF::loadView('pdf11');
        return $pdf->download('Pagaré.pdf');
     }
     public function generarpdf12(){
        $pdf = PDF::loadView('pdf12');
        return $pdf->download('Contrato-Garantía-Mobiliaria.pdf');
     }
     public function generarpdf13(){
        $pdf = PDF::loadView('pdf13');
        return $pdf->download('Solicitud-Reprogramación.pdf');
     }
     public function generarpdf14(){
        $pdf = PDF::loadView('pdf14');
        return $pdf->download('Constancia-Elección-Pago.pdf');
     }
  public function generarpdf15(){
        $pdf = PDF::loadView('pdf15');
        return $pdf->download('Minuta-Garantia-Mobiliaria.pdf');
     } 
     public function generarpdf16(){
        $pdf = PDF::loadView('pdf16');
        return $pdf->download('Contrato-General-Crédito.pdf');
     } 
     public function generarpdf17(){
        $pdf = PDF::loadView('pdf17');
        return $pdf->download('Fusion-Iversión.pdf');
     } 
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BancaPapayita  $bancaPapayita
     * @return \Illuminate\Http\Response
     */
    public function show(BancaPapayita $bancaPapayita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BancaPapayita  $bancaPapayita
     * @return \Illuminate\Http\Response
     */
    public function edit(BancaPapayita $bancaPapayita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BancaPapayita  $bancaPapayita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BancaPapayita $bancaPapayita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BancaPapayita  $bancaPapayita
     * @return \Illuminate\Http\Response
     */
    public function destroy(BancaPapayita $bancaPapayita)
    {
        //
    }
}
