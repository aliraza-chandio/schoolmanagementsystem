<?php

namespace App\Http\Controllers;
use App\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index(){
        $classes = Classes::where('status','Active')->paginate(5);
        
        return view('classes.index', compact('classes'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('classes.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $title3 = $request->title2;
        $title3 = $data["title2"];
        $status = $data["status"];

        $classes = new Classes;
        $classes->title = $title3;
        $classes->status = $status;
        $classes->save();
        return redirect('/classes');
    }
}