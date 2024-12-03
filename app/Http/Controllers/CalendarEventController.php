<?php

namespace App\Http\Controllers;

use App\Models\CalendarEvent;
use Illuminate\Http\Request;

class CalendarEventController extends Controller
{
    public function index()
    {
        $events = CalendarEvent::all();
        return view('calendar-events.index', compact('events'));
    }

    public function create()
    {
        return view('calendar-events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'event_date' => 'required|date',
            'description' => 'nullable',
        ]);

        CalendarEvent::create($request->all());
        return redirect()->route('calendar-events.index');
    }

    public function edit(CalendarEvent $calendarEvent)
    {
        return view('calendar-events.edit', compact('calendarEvent'));
    }

    public function update(Request $request, CalendarEvent $calendarEvent)
    {
        $request->validate([
            'event_name' => 'required',
            'event_date' => 'required|date',
            'description' => 'nullable',
        ]);

        $calendarEvent->update($request->all());
        return redirect()->route('calendar-events.index');
    }

    public function destroy(CalendarEvent $calendarEvent)
    {
        $calendarEvent->delete();
        return redirect()->route('calendar-events.index');
    }
}
