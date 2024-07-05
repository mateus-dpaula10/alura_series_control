<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index(Serie $series) {
        $seasons = $series->seasons()->with('episodes')->get();

        return view ('seasons.index')
            ->with('series', $series)    
            ->with('seasons', $seasons);
    }
}
