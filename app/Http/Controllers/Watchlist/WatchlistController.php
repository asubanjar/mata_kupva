<?php

namespace App\Http\Controllers\Watchlist;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WatchlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $watchlists = Watchlist::all();
        return view('watchlists.index', compact('watchlists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('watchlists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'nama_kupva' => 'required|string|max:255',
            'teregistrasi_ahu' => 'required|boolean',
        ]);

        Watchlist::create($request->all());

        return redirect()->route('watchlists.index')->with('success', 'Watchlist entry created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Watchlist  $watchlist
     * @return \Illuminate\View\View
     */
    public function show(Watchlist $watchlist)
    {
        return view('watchlists.show', compact('watchlist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Watchlist  $watchlist
     * @return \Illuminate\View\View
     */
    public function edit(Watchlist $watchlist)
    {
        return view('watchlists.edit', compact('watchlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Watchlist  $watchlist
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Watchlist $watchlist)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'nama_kupva' => 'required|string|max:255',
            'teregistrasi_ahu' => 'required|boolean',
        ]);

        $watchlist->update($request->all());

        return redirect()->route('watchlists.index')->with('success', 'Watchlist entry updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Watchlist  $watchlist
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Watchlist $watchlist)
    {
        $watchlist->delete();

        return redirect()->route('watchlists.index')->with('success', 'Watchlist entry deleted successfully.');
    }
}