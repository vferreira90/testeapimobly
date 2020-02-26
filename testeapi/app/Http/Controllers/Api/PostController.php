<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{

    public function posts($id)
    { 
        try {

            $arraypost = Post::all();
            $arr = [];

            foreach ($arraypost as $post) {

                if ($post['userId'] == $id) {
                    array_push($arr, $post);
                }
            }

        } catch (\Exception $erro) {
            return ['retorno' => 'erro', 'details' => $erro];
        }

        return view('usuarios.postsshow')->with(['usuarios' => $arr]);

    }

    public function addpost(Request $request)
    {

        try {

            $arraypost = $request->all();

            foreach ($arraypost as $post) {

                $npost = new Post();

                $npost->userId = $post['userId'];
                $npost->id = $post['id'];
                $npost->title = $post['title'];
                $npost->body = $post['body'];

                //return ['retorno'=>'ok'];
                echo " OK - id {$post['id']} userId {$post['userId']}  <br>";

                $npost->save();
            }
        } catch (\Exception $erro) {
            return ['retorno' => 'erro', 'details' => $erro];
        }
    }

    public function selectpost($id)
    {
        try {

            $arraypost = Post::all();
            $arr = [];

            foreach ($arraypost as $post) {

                if ($post['userId'] == $id) {
                    array_push($arr, $post);
                }
            }

            return $arr;
        } catch (\Exception $erro) {
            return ['retorno' => 'erro', 'details' => $erro];
        }
    }
}
