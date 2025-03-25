<?php

namespace App\Http\Controllers;

use App\Models\Well;
use Illuminate\Http\Request;

class WellController extends Controller
{
    public function index() {
        $wells = Well::all();
        return view('wells.index', compact('wells'));
    }

    public function create() {
        return view('wells.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'production_rate' => 'required|numeric',
            'status' => 'required',
        ]);
        Well::create($request->all());
        return redirect()->route('wells.index');
    }

    public function show(Well $well) {
        return view('wells.show', compact('well'));
    }

    public function edit(Well $well) {
        return view('wells.edit', compact('well'));
    }

    public function update(Request $request, Well $well) {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'production_rate' => 'required|numeric',
            'status' => 'required',
        ]);
        $well->update($request->all());
        return redirect()->route('wells.index');
    }

    public function destroy(Well $well) {
        $well->delete();
        return redirect()->route('wells.index');
    }
}

