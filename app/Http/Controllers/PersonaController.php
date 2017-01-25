<?php
/**
 * Created by PhpStorm.
 * User: erickalcantarelias1
 * Date: 23/01/17
 * Time: 10:45
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PersonaController extends Controller{
    function index(){
        $personas = \App\Persona::all();

        /*echo '<pre>';
        print_r($personas);
        echo '</pre>';*/

        return view('personas.index', [ 'all_personas' => $personas ]);
    }
    function add(){
        $personas = \App\Persona::all();

        /*echo '<pre>';
        print_r($personas);
        echo '</pre>';*/

        return view('personas.add', [ 'all_personas' => $personas ]);
    }
    function edit(){
        $personas = \App\Persona::all();

        /*echo '<pre>';
        print_r($personas);
        echo '</pre>';*/

        return view('personas.edit', [ 'all_personas' => $personas ]);
    }
    function delete(){
        $personas = \App\Persona::all();

        /*echo '<pre>';
        print_r($personas);
        echo '</pre>';*/

        return view('personas.delete', [ 'all_personas' => $personas ]);
    }
    function update(){
        $personas = \App\Persona::all();

        /*echo '<pre>';
        print_r($personas);
        echo '</pre>';*/

        return view('personas.update', [ 'all_personas' => $personas ]);
    }
    function insert(){
        $personas = \App\Persona::all();

        /*echo '<pre>';
        print_r($personas);
        echo '</pre>';*/

        return view('personas.insert', [ 'all_personas' => $personas ]);
    }
}