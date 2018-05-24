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
}
