<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listItem;

class TodoListController extends Controller
{
    public function index(){
        return view('welcome', ['listItems' => listItem::where('is_complete', 0)->get()]);

    }
    public function saveItem(Request $request){
        $newlistItem = new listItem;
        $newlistItem->name = $request->listItem;
        $newlistItem->is_complete = 0;
        $newlistItem->save();
        $newlistItem->refresh();

        return redirect('/');
    }

    public function markComplete($id){
        $listItem = listItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();
        
        return redirect('/');    
    }
}
