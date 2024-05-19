<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananModel;
use App\Models\PesanModel;
use App\Models\SurveiModel;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_layanan = LayananModel::all()->count();
        $jumlah_pesan = PesanModel::all()->count();
        $jumlah_survei = SurveiModel::all()->count();
        $jumlah_user = User::all()->count();
        return view('admin.dashboard', [
            "jumlah_layanan" => $jumlah_layanan,
            "jumlah_pesan" => $jumlah_pesan,
            "jumlah_survei" => $jumlah_survei,
            "jumlah_user" => $jumlah_user,
            "title" => "Dashboard"
        ]);
    }
}
