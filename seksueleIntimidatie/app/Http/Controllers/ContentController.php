<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    public function edit($id){
      $poc = Content::findOrFail($id);
      return view('admin.edit-content', ['content' => $poc]);
    }

    public function update(Request $request){
      // TODO: Add validation
      $content = Content::findOrFail($request->id);
      $content->title = $request->title;
      $content->body = $request->body;
      $content->save();

      return redirect()->route('admin.index');
    }
}
