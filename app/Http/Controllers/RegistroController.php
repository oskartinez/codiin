<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}