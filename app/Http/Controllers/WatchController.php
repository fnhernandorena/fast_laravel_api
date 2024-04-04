<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Http\Requests\WatchRequest;

/**
 * Class WatchController
 * @package App\Http\Controllers
 */
class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $watches = Watch::paginate();

        return view('watch.index', compact('watches'))
            ->with('i', (request()->input('page', 1) - 1) * $watches->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $watch = new Watch();
        return view('watch.create', compact('watch'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WatchRequest $request)
    {
        Watch::create($request->validated());

        return redirect()->route('watches.index')
            ->with('success', 'Watch created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $watch = Watch::find($id);

        return view('watch.show', compact('watch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $watch = Watch::find($id);

        return view('watch.edit', compact('watch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WatchRequest $request, Watch $watch)
    {
        $watch->update($request->validated());

        return redirect()->route('watches.index')
            ->with('success', 'Watch updated successfully');
    }

    public function destroy($id)
    {
        Watch::find($id)->delete();

        return redirect()->route('watches.index')
            ->with('success', 'Watch deleted successfully');
    }
}
