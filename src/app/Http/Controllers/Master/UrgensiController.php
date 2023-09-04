<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Urgensi;
use Illuminate\Http\Request;

class UrgensiController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:master');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $urgensis = Urgensi::all();

        return view('master/urgensi/index', compact('urgensis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:urgensis|max:50',
        ]);

        Urgensi::create([
            'name' => $request->name,
        ]);

        return redirect('/master/urgensi')->with('success', 'Sukses menambahkan urgensi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): void
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): void
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Urgensi $urgensi)
    {
        $urgensi->delete();

        return redirect('/master/urgensi')->with('success', 'Sukses menghapus urgensi');
    }
}