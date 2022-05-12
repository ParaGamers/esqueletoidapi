<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\api\v1\ScoreCollection;
use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    
    public function index()
    {
        return new ScoreCollection(Score::all());
    }

    public function firstTen(){
        return new ScoreCollection(Score::orderBy('score', 'desc')->take(10)->get);
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
