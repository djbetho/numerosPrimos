<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class PrimosController extends Controller
{

    public function isPrime($numero){
         
        $contadorPrimo = 0;

        for($contador = 1; $contador<=$numero; $contador++){
            if($numero % $contador == 0){
                $contadorPrimo = $contadorPrimo + 1;
            }
        }

        if($contadorPrimo == 2){
            return true;
        }
        else{
            return false;
        }
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        
       if($n=$request->inputNumber){
   
            for($i=$n;$i>=2;$i--){
                        
                
                if(self::isPrime($i)){
                    
                    
                    $valor[$i] =$i;
                     
                }
               
            }
           
           
        } 
        
 
        return view('primos',compact('valor') );
        
    }
    

   
}

 