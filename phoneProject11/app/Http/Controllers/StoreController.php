<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all(); // Взимаме всички магазини
        return view('stores.index', compact('stores'));
    }

    public function create()
    {
        return view('stores.form'); // Показваме формата за създаване (ако трябва)
    }

    public function store(Request $request)
    {
        // Валидация
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Създаване на нов магазин
        Store::create($request->all());

        return redirect()->route('stores.index')->with('success', 'Store added successfully.');
    }

    public function edit(Store $store)
    {
        return view('stores.form', compact('store')); // Показваме формата за редакция (ако трябва)
    }

    public function update(Request $request, Store $store)
    {
        // Валидация
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Актуализиране на магазин
        $store->update($request->all());

        return redirect()->route('stores.index')->with('success', 'Store updated successfully.');
    }

    public function destroy(Store $store)
    {
        $store->delete(); // Изтриване на магазин
        return redirect()->route('stores.index')->with('success', 'Store deleted successfully.');
    }
}
