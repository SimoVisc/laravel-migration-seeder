<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index(){  
        
      $trains= Train::where('Departure_time','>=', Carbon::now())->get();
      return view('homepage', compact('trains'));
    }
}
