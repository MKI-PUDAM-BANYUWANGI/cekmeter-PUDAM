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
        $merkmeter = MerkMeter::count();
        $staff = Staff::count();
        $pelanggan = Pelanggan::count();
        return view('dashboard', compact('pelanggan', 'merkmeter', 'staff'));
    }
}
