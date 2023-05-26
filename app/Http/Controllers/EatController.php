<?php

namespace App\Http\Controllers;

use App\Models\Eat;
use App\Models\Alergy;
use App\Models\Food;
use Illuminate\Http\Request;

class EatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eats = Eat::all();
        $foods = Food::all();
        $alergies = Alergy::all();

        return view('food.index', compact('eats', 'foods', 'alergies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_id' => 'required',
            'alergy_id' => 'required',
        ]);

        // var_dump("123");
  
        Eat::create($request->all());
   
        return redirect('/');
    }
    
}
