<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index() {
        $data = Inventory::all();
        return view('inventory.index', compact('data'));
    }

    public function create() {
        return view('inventory.create');
    }

    public function store(Request $request) {
        Inventory::create($request->all());
        return redirect('/');
    }

    public function edit($id) {
        $item = Inventory::findOrFail($id);
        return view('inventory.edit', compact('item'));
    }

    public function update(Request $request, $id) {
        $item = Inventory::findOrFail($id);
        $item->update($request->all());
        return redirect('/');
    }

    public function destroy($id) {
        $item = Inventory::findOrFail($id);
        $item->delete();
        return redirect('/');
    }

    public function useForm($id) {
        $item = Inventory::findOrFail($id);
        return view('inventory.use', compact('item'));
    }

    public function use(Request $request, $id) {
        $item = Inventory::findOrFail($id);
        $jumlah = (int) $request->jumlah;

        if ($jumlah > $item->jumlah_barang) {
            return back()->with('error', 'Jumlah melebihi stok!');
        }

        $item->jumlah_barang -= $jumlah;
        if ($item->jumlah_barang == 0) {
            $item->status_barang = 0;
        }
        $item->save();
        return redirect('/');
    }

    public function addStockForm($id) {
        $item = Inventory::findOrFail($id);
        return view('inventory.add_stock', compact('item'));
    }

    public function addStock(Request $request, $id) {
        $item = Inventory::findOrFail($id);
        $jumlah = (int) $request->jumlah;
        $item->jumlah_barang += $jumlah;
        if ($item->jumlah_barang > 0) {
            $item->status_barang = 1;
        }
        $item->save();
        return redirect('/');
    }
}