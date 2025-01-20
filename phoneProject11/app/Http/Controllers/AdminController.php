<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Store;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin'); 
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function editPhone($id)
    {
        $phone = Phone::findOrFail($id);
        return view('admin.editPhone', compact('phone'));
    }

    public function updatePhone(Request $request, $id)
    {
        $phone = Phone::findOrFail($id);
        $phone->update($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Телефонът беше актуализиран');
    }

    public function deletePhone($id)
    {
        $phone = Phone::findOrFail($id);
        $phone->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Телефонът беше изтрит');
    }
}
