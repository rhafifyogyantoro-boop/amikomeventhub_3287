<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Partner;

class WelcomeController extends Controller
{
    public function index()
    {
        $events = Event::with('category')->latest()->get();
        $partners = Partner::where('is_active', true)->orderBy('name')->get();
        return view('welcome', compact('events', 'partners'));
    }
}