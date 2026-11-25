<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Location;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('events', [
            'events' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event_create',[
            'locations' => Location::all(),
            'categories' => EventCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'location_id' => 'required|integer|exists:locations,id',
            'category_id' => 'required|integer|exists:event_categories,id',
            'description' => 'nullable|string'
        ]);
        $event = new Event($validated);
        $event->save();
        return redirect('/events');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('event', [
            'event' => Event::all()->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('event_edit', [
            'event' => Event::all()->where('id', $id)->first(),
            'locations' => Location::all(),
            'categories' => EventCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'location_id' => 'required|integer|exists:locations,id',
            'category_id' => 'required|integer|exists:event_categories,id',
            'description' => 'nullable|string'
        ]);
        $event = Event::all()->where('id', $id)->first();
        $event->update($validated);
        return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::destroy($id);
        return redirect('/events');
    }
}
