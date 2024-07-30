<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerkMeter;
use App\Models\Staff;
use App\Models\Pelanggan;

class DashboardController extends Controller
{
    // Untuk input count data ke dashboard

    public function index() {
        $merkCount = MerkMeter::count();
        // $staffCount = Staff::count();
        // $pelangganCount = Pelanggan::count();
        return view('dashboard', compact('merkCount'));
    }
}
