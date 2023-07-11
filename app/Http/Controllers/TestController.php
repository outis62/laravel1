<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateFormRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function accueil()
    {
        $userName = 'Zabre-boureima';
        $numeros = ['1', '2', '3', '4'];
       return view('accueil', [
        'name' => $userName,
        'age' => 16,
        'product' => '',
        'nums' => $numeros
    ]); 
    } 
    public function store(validateFormRequest $request){
        // dd($request);

        $verif = $request;
        if($verif){
            echo 'Verification passe';
        }
        else{
            return redirect()->back();
        }
    }
    public function method1($userName){
        return 'Bonjour ' . $userName;
    }
    public function exemple(){
        return 'Ceci est un exemple';
    }
}
