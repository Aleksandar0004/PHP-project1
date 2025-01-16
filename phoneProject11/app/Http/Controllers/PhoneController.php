<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::all(); // Взимаме всички телефони
        return view('phones.index', compact('phones'));
    }

    public function create()
    {
        return view('phones.form'); // Показваме формата за създаване
    }

    public function store(Request $request)
    {
        // Валидация
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'color' => 'required|string|max:255',
            'in_stock' => 'required|boolean',
        ]);

        // Създаване на нов телефон
        Phone::create($request->all());

        return redirect()->route('phones.index')->with('success', 'Phone added successfully.');
    }

    public function edit(Phone $phone)
    {
        return view('phones.form', compact('phone')); // Показваме формата за редакция
    }

    public function update(Request $request, Phone $phone)
    {
        // Валидация
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'color' => 'required|string|max:255',
            'in_stock' => 'required|boolean',
        ]);

        // Актуализиране на телефон
        $phone->update($request->all());

        return redirect()->route('phones.index')->with('success', 'Phone updated successfully.');
    }

    public function destroy(Phone $phone)
    {
        $phone->delete(); // Изтриване на телефон
        return redirect()->route('phones.index')->with('success', 'Phone deleted successfully.');
    }
}
