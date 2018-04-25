<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Websection;

class AdminController extends Controller
{
    //
    function index()
    {
        $websections = Websection::all();
   
      return view("admin")->with(["websection" => $websections]);
    }

    function edit_data(Request $request)
    {
        $id = $request->input('id');

        $websection = websection::find($id);

        $websection->name = $request->input('name');
        $websection->save();
        return redirect()->route('admin');
    }

    public function save_data(Request $request)
    {     
        $websection = Websection::create($request->all());
        return redirect()->route('admin');
    }

    function delete_data(Request $request)
    {
        $id = $request->input('id'); 
        $websection = websection::find($id);
        $websection->delete();
        return redirect()->route('admin');
    }
    


   

   

   
}
