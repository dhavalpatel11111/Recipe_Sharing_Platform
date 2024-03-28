<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function index()
    {
        return view('addRecipe');
    }

    public function add_recipe(Request $request)
    {
        $allRequestData = $request->all();

       $img = $allRequestData['img'];
       $path = public_path("/imgs");

       $imgname = time() . "." . $img->getClientOriginalExtension();
        $img->move($path, $imgname);
   

        if (Recipe::create([
            "recipename" => $allRequestData['recipename'],
            "recipe_Ingridiants" => $allRequestData['recipe_Ingridiants'],
            "guide" => $allRequestData['guide'],
            "how_many_people" => $allRequestData['how_many_people'],
            "authority" => $allRequestData['authority'],
            "img" => $imgname,
        ])) {
            $responce['status'] = 0;
            $responce['msg'] = "Recipe Added Succsessfully";
            return $responce;
        } else {
            $responce['status'] = 1;
            $responce['msg'] = "Finding Some Error";
            return $responce;
        }
    }



    public function recipe_list()
    {
        $all_recipe_Data = Recipe::all()->toArray();
        return view('recipe_list')->with(compact("all_recipe_Data"));
    }

    public function explore_new_people(){
        $userData = User::all()->whereNotIn("id" , Auth::user()->id)->toArray();
        return view("explore_new_people")->with(compact("userData"));
    }
}
