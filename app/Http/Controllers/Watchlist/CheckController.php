<?php

namespace App\Http\Controllers\Watchlist;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\Check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
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
    public function store(Request $request): void
    {
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
    public function destroy(Check $check)
    {
        $check->delete();

        return redirect(
            '/watchlist/subject/action/' . $check->action_id . '/check'
        )->with('success', 'Sukses menghapus check');
    }
}