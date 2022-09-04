<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Item;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::with("Genre")
                    ->orderBy('name')
                    ->get();

        return view('items.list', compact('items'));
    }

    // Create
    public function create(Request $request)
    {
        $genres = Genre::get();
        return view("items.create", compact("genres"));
    }
    public function store(Request $request)
    {
        // dd($request);
        $items = Item::create([
            "name" => $request->name,
            "genre_id" => $request->genre,
            "tahun" => $request->tahun,
            "desc" => $request->desc,
            
        ]);

        return redirect('/');
    }

    // Edit
    public function edit($id)
    {
        $genres = Genre::get();
        $item = Item::findOrFail($id);

        return view('items.edit', compact('item','genres'));
    }
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update([
            "name" => $request->name ?? $item->name,
            "genre_id" => $request->genre ?? $item->genre_id,
            "tahun" => $request->tahun ?? $item->tahun,
            "desc" => $request->desc ?? $item->desc
        ]);

        return redirect('/');
    }

    // Destroy
    public function destroy($id)
    {$items = Item::with('Genre')->get();
        $item = Item::findOrFail($id);
        $item->delete();

        // return view("items.list", compact('items'));
        return redirect('/');
    }
}
