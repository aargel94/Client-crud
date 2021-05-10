<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Http;

class UsuariosController extends Controller
{
    public function __construct (){
        $this->cliente = new Client(['base_uri' => 'http://crud.nucleoeducativo.com/api/']);
    }

    public function index(Request $request){
        if($request->search){
            $res = $this->cliente->get('usuarios?search='.$request->search);
            $usuarios = json_decode($res->getBody());
            // dd($usuarios);
            return view('usuarios.usuarios', compact('usuarios'));
        }else{
            $res = $this->cliente->get('usuarios');
            $usuarios = json_decode($res->getBody());
            return view('usuarios.usuarios', compact('usuarios'));
        }
        
        
    }
    public  function create (){
        return view('usuarios.crear');
    }

    public function store(Request $request){        
        $this->cliente->post('usuarios', [
            'json' => $request->all()
        ]);

        return redirect('/');
    }
    public function edit ($id) {
       $res = $this->cliente->get('usuarios/'.$id);
       $usuario =  json_decode($res->getBody());
        return view('usuarios.editar', compact('usuario'));
    }
    
    public function update (Request $request, $id){
        $this->cliente->put('usuarios/'.$id, [
            'json' => $request->all()
        ]);

        return redirect('/');

    }
    public function destroy($id){
        $this->cliente->delete('usuarios/'.$id);
        return redirect('/');
    }
    public function buscar($search){
        
        // return view('usuarios.usuarios', compact('usuarios'));
    }
    
}
