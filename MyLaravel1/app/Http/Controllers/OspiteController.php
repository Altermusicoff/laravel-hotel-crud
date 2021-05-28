<?php

namespace App\Http\Controllers;

use App\Ospite;
use Illuminate\Http\Request;

class OspiteController extends Controller
{
    public function index()
    {
        $ospiti = Ospite::all();
        return view('pages.ospiti', compact("ospiti"));
        
    }

    public function show($id)
    {
        // dd($id);
        $ospite = Ospite::find($id);
        return view('pages.ospite', compact("ospite"));
    }

    public function create()
    {
        return view('pages.ospiti-form');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'nullable|max:100',
            'lastname' => 'nullable|max:100',
            'date_of_birth' => 'nullable|date',
            'document_type' => 'nullable|max:20',
            'document_number' => 'nullable|numeric',
        ]);
        $ospite = Ospite::create($validate);
        return redirect()->route('show-ospite', $ospite->id);
    }
}