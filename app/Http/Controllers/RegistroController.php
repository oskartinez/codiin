<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegistroController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function registrar(Request $request)
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        echo file_get_contents($request->fotocopia_doc->path());
    }

    // desde /registrar_1
    // chequeamos que haya ingresado correctamente el captcha 
    // y lo enviamos al formulario de alta
    public function registrar_1(Request $request) {
        if ($request->getMethod() == 'POST') {

            $rules = ['captcha' => 'required|captcha'];
            $validator = validator()->make($request->all(), $rules);
            
            if ($validator->fails()) {
                // return View::make('greeting', array('name' => 'Taylor'));

                // no hacemos control de captcha y seguimos
                return  view('registrar.paso2');

                return redirect('registrar_1')
                            ->withErrors($validator);
                            //->withInput();

                // return redirect()->route('registrar_1')
                //             ->with('success', 'Caracteres ingresados correctamente');
                //echo request();
            } else {
                // echo '<p style="color: #00ff30;">Matched :)</p>';
                return  view('registrar.paso2');
            }
        }

    }
}