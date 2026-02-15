<?php
namespace App\Http\Controllers;

use App\Models\pembeli;
use App\Models\aset;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahAset = aset::count();
        $jumlahPembeli = pembeli::count();

        $jumlahLakiLaki = pembeli::where('jenis_kelamin', '=', 'Laki-laki')->count();
        $jumlahPerempuan = pembeli::where('jenis_kelamin', '=', 'Perempuan')->count();

        $aset = DB::table('aset')
            ->leftJoin('pembeli', 'pembeli.aset', '=', 'aset.nama_aset') 
            ->select('aset.nama_aset', DB::raw('COALESCE(count(pembeli.id), 0) as pembeli_count'))
            ->groupBy('aset.id', 'aset.nama_aset')
            ->get();
            
        return view('dashboard', [
            'jumlahAset' => $jumlahAset,
            'jumlahPembeli' => $jumlahPembeli,
            'jumlahLakiLaki' => $jumlahLakiLaki,
            'jumlahPerempuan' => $jumlahPerempuan,
            'aset' => $aset,
        ]);
    }
}
