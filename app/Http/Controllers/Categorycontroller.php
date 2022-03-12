<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;
class Categorycontroller extends Controller
{
    public function index(){
        $data = Category::all();
        return view('catagory/index',compact('data'));
    }
    public function create(){
        return view('catagory/create');
    }
    public function insert(){
        // $this
        $data = Category::create(request(['name','number','description']));
        return redirect('index');
    }
    public function edit(Request $request,$id){
        $data = DB::table('category')->find($id);
        return view('catagory/edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data= Category::find($id);
        $data ->name = $request->name;
        $data ->number = $request->number;
        $data ->description = $request->description;
        $data->save();
        return redirect('index');
    }
    public function delete(Request $request,$id){
        Category::destroy($id);
        return redirect('index');
    }
}
