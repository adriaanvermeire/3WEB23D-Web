<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HowScenario;

class ReactionController extends Controller
{
    public $color = 'blue';

    public function index(){

      $scenarios = HowScenario::all();

      $data = [
        'scenarios' => $scenarios,
        'title' => 'Hoe reageren?',
        'color' => $this->color
      ];

      return view('reaction.index', $data);
    }

    public function create(){
      return view('reaction.createEdit');
    }

    public function edit($id){
      $scenario = HowScenario::findOrFail($id);
      return view('reaction.createEdit', ['scenario' => $scenario]);
    }

    public function post(Request $request){
      $scenario = HowScenario::findOrNew($request->id);
      $scenario->name = $request->description;
      $scenario->good = $request->good;
      $scenario->bad = $request->bad;
      $scenario->save();
      return redirect()->route('admin.index');
    }

    public function delete($id){
      $toDelete = HowScenario::findOrFail($id);
      $toDelete->delete();

      // TODO: return message that it's deleted
      return redirect()->route('admin.index');
    }
}
