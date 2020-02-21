<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Usuario;
//use App\Post;

class UsuarioController extends Controller
{
   public function users()
   {

      $usuarios = Usuario::all();

      return $usuarios;

   }

   public function index()
   {

      $usuarios = Usuario::all();

      //return $usuarios;

      return view('usuarios.index')->with(['usuarios' => $usuarios]);
   }

   public function create()
   {

      return view('usuarios.create');
   }

   public function store(Request $request)
   {

      Usuario::create($request->all());

      return redirect()->route('usuarios.index');
   }

   public function show($id)
   {

      $usuarios = Usuario::find($id);
      return view('usuarios.show')->with(['usuarios' => $usuarios]);
   }

   public function edit($id)
   {

      $usuarios = Usuario::find($id);
      return view('usuarios.edit')->with(['usuarios' => $usuarios]);
   }

   public function update(Request $request, $id)
   {

      $usuario = Usuario::find($id)->update($request->all());
      return redirect()->route('usuarios.index');
   }


   public function status(Request $request)
   {

      $dados = $request->all();

      foreach ($dados as $e) {
         echo "nome {$e['name']} rua {$e['address']['street']} lat {$e['address']['geo']['lat']} {$e['address']['geo']['lng']}  <br>";
      }
   }


   public function add(Request $request)
   {

      try {

         $arrayuser = $request->all();

         foreach ($arrayuser as $user) {

            $usuario = new Usuario();

            $usuario->id = $user['id'];
            $usuario->name = $user['name'];
            $usuario->username = $user['username'];
            $usuario->email = $user['email'];

            //address
            $usuario->street = $user['address']['street'];
            $usuario->suite = $user['address']['suite'];
            $usuario->city = $user['address']['city'];
            $usuario->zipcode = $user['address']['zipcode'];
            $usuario->geolat = $user['address']['geo']['lat'];
            $usuario->geolng = $user['address']['geo']['lng'];

            $usuario->phone = $user['phone'];
            $usuario->website = $user['website'];

            //company 
            $usuario->compname = $user['company']['name'];
            $usuario->catchphrase = $user['company']['catchPhrase'];
            $usuario->bs = $user['company']['bs'];

            //return ['retorno'=>'ok'];
            echo " OK - nome {$user['name']} rua {$user['address']['street']} lat {$user['address']['geo']['lat']} {$user['address']['geo']['lng']}  <br>";

            $usuario->save();
         }
      } catch (\Exception $erro) {
         return ['retorno' => 'erro', 'details' => $erro];
      }
   }

   public function list()
   {
      $user = Usuario::all();
      return view('usuarios.index')->with(['usuarios' => $user]);
   }

   public function select($id)
   {
      $user = Usuario::find($id);
      return $user;
   }

   public function update2(Request $request, $id)
   {
      try {
         $usuario = Usuario::find($id);

         $arrayuser = $request->all();

         foreach ($arrayuser as $user) {

            $usuario->name = $user['name'];
            $usuario->username = $user['username'];
            $usuario->email = $user['email'];

            //address
            $usuario->street = $user['address']['street'];
            $usuario->suite = $user['address']['suite'];
            $usuario->city = $user['address']['city'];
            $usuario->zipcode = $user['address']['zipcode'];
            $usuario->geolat = $user['address']['geo']['lat'];
            $usuario->geolng = $user['address']['geo']['lng'];

            $usuario->phone = $user['phone'];
            $usuario->website = $user['website'];

            //company 
            $usuario->compname = $user['company']['name'];
            $usuario->catchphrase = $user['company']['catchPhrase'];
            $usuario->bs = $user['company']['bs'];

            $usuario->save();

            return ['retorno' => 'ok', 'dedos' => $request->all()];
         }
      } catch (\Exception $erro) {
         return ['retorno' => 'erro', 'details' => $erro];
      }
   }

   public function delete($id)
   {
      try {

         $user = Usuario::find($id);
         $user->delete();

         return ['retorno' => 'ok'];
      } catch (\Exception $erro) {
         return ['retorno' => 'erro', 'details' => $erro];
      }
   }
}
