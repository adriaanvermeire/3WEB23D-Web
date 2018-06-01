<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HowScenario;

class ReactionController extends Controller
{
    public $color = 'blue';
    public $title = 'Hoe reageren?';

    public function index()
    {
      $scenarios = HowScenario::all();

      $data = [
        'scenarios' => $scenarios,
        'title' => $this->title,
        'color' => $this->color,
      ];
      return view('reaction.index', $data);
    }

    public function create()
    {

      return view('reaction.createEdit', ['title' => $this->title]);
    }

    public function edit($id)
    {
      $scenario = HowScenario::findOrFail($id);
      return view('reaction.createEdit', ['scenario' => $scenario, 'title' => $this->title]);
    }

    public function post(Request $request)
    {
      $request->validate([
        'description' => 'required|string|min:10|unique:how_scenarios',
        'good' => 'required|string|min:10',
        'bad' => 'required|string|min:10',
      ]);

      $scenario = HowScenario::findOrNew($request->id);
      $scenario->name = $request->description;
      $scenario->good = $request->good;
      $scenario->bad = $request->bad;
      $scenario->save();

      return redirect()->route('admin.index');
    }

    public function delete($id)
    {
      $toDelete = HowScenario::findOrFail($id);
      $toDelete->delete();

      // TODO: return message that it's deleted
      return redirect()->route('admin.index');
    }
}
