<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ItemController extends Controller
{
    // Index
    public function index()
    {
        $items = Item::with("Genre")->get();

        return view('items.index', compact('items'));
    }

    // Create
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        // dd($request);
        
        $items = Item::create([
            "name" => $request->name,
            "quantity" => $request->quantity,
            "price" => $request->price,
            "jenis" => $request->jenis
            
        ]);

        return redirect('/');
    }

    // Edit
    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('items.edit', compact('item'));
    }
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update([
            "name" => $request->name ?? $item->name,
            "quantity" => $request->quantity ?? $item->quantity,
            "price" => $request->price ?? $item->price,
            "jenis" => $request->jenis ?? $item->jenis
        ]);

        return redirect('/');
    }

    // Destroy
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect('/');
    }
}
