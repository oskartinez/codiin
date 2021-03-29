<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Dependencia {
    public $id;
    public $nombre;
   }

class DependenciasController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

           
                    
        $dep1 = new Dependencia();
        $dep1->id = 1;
        $dep1->nombre = "COMISARIA 1";
                            
        $dep2 = new Dependencia();
        $dep2->id = 2;
        $dep2->nombre = "COMISARIA 2";


         //  echo json_encode($articulo);
        $data = array(
            $dep1, $dep2
          
        );
        return $data;
    }
}