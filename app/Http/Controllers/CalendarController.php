<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\NotificationBuilder;

class CalendarController extends Controller
{
    public function index()
    {
        $events = Calendar::all();
        $event = [];

        foreach ($events as $row) {
            $event[] = [
                'title' => $row->title,
                'color' => $row->color,
                'start' => $row->start_date ,
                'end' => $row->end_date ,
            ];
        }
        return view('admin.calendar.event', ['calendar' => $event]);
    }

    public function add()
    {
        return view('admin.calendar.addevent');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'color' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $events = new Calendar();
        $events->title = $request->title;
        $events->color = $request->color;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;
        $events->save();
        // Toastr::success('Event successfully added!', 'Success');
        return redirect('calendar');
    }
}
