<?php

namespace App\Http\Controllers;

use App\Clases\NumeroALetras;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
    * Muestra un formulario para la creación de un elemento en el recurso
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {
        /** @var string Esta es la variable que recibirá el texto convertido */
        $letras = NumeroALetras::convertir(12345.67, 'soles', 'centimos');

        /** Retprno de la vista 'welcome' incluyendo la variable */
        return view('welcome', [
            'texto' => $letras,
            'texto2' => numbers_to_text(93536),
        ]);
    }
}
