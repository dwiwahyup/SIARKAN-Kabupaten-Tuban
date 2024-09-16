<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Models\Jalan;

class PemetaaanUserController extends Controller
{
    public function index()
    {
        $lokasiData = Lokasi::orderBy('created_at', 'desc')->get();
        // dd($lokasiData);
        $jalan = Jalan::all();

        $sangatRawanCount = Lokasi::where('tingkat_kerawanan', 'Sangat Rawan')->count();
        $rawanCount = Lokasi::where('tingkat_kerawanan', 'Rawan')->count();
        $tidakRawanCount = Lokasi::where('tingkat_kerawanan', 'Tidak Rawan')->count();

        return view('users.pemetaan.index', ['data' => $lokasiData, 'jalan' => $jalan, 'sangatRawanCount' => $sangatRawanCount, 'rawanCount' => $rawanCount, 'tidakRawanCount' => $tidakRawanCount]);
    }

    //detail
    public function detail($id)
    {
        $data = Lokasi::where('id', $id)->with('rules')->first();


        // ----------------------------------Jam Kecelakaan---------------------------------- //
        $jam = keanggotaanJam($data->jam_kecelakaan);
        // ----------------------------------Kondisi Jalan ---------------------------------- //
        $kondisiJalan = keanggotaanKondisiJalan($data->kondisi_jalan);
        // ----------------------------------Kondisi Lingkungan ---------------------------------- //
        $kondisiLingkungan = keanggotaanKondisiLingkungan($data->kondisi_lingkungan);
        // ----------------------------------Kondisi Kecelakaan ---------------------------------- //
        $kondisiKecelakaan = keanggotaanKondisiKecelakaan($data->kondisi_kecelakaan);
        // dd($jam_kecelakaan);

        // ----------------------------------Min-Max ---------------------------------- //
        $Maxjam_kecelakaan = max($jam['jam_kecelakaanA'], $jam['jam_kecelakaanB'], $jam['jam_kecelakaanC'], $jam['jam_kecelakaanD']);
        $Maxkondisi_jalan = max($kondisiJalan['kondisi_jalanA'], $kondisiJalan['kondisi_jalanB'], $kondisiJalan['kondisi_jalanC']);
        $Maxkondisi_lingkungan = max($kondisiLingkungan['kondisi_lingkunganA'], $kondisiLingkungan['kondisi_lingkunganB'], $kondisiLingkungan['kondisi_lingkunganC']);
        $Maxkondisi_kecelakaan = max($kondisiKecelakaan['kondisi_kecelakaanA'], $kondisiKecelakaan['kondisi_kecelakaanB'], $kondisiKecelakaan['kondisi_kecelakaanC']);

        $minRule = min($Maxjam_kecelakaan, $Maxkondisi_jalan, $Maxkondisi_lingkungan, $Maxkondisi_kecelakaan);

        // dd($minRule);
        // ---------------------------------- Luas dan Moment ---------------------------------- //
        $luasMoment = hitungLuasMoment($data->tingkat_kerawanan, $minRule);

        // ---------------------------------- Defuzzyfikasi ---------------------------------- //
        $defuzzy = $luasMoment['totalMoment'] / $luasMoment['totalLuas'];

        $fungsiKeanggotaan = [
            'jam' => $Maxjam_kecelakaan,
            'kondisi_jalan' => $Maxkondisi_jalan,
            'kondisi_lingkungan' => $Maxkondisi_lingkungan,
            'kondisi_kecelakaan' => $Maxkondisi_kecelakaan,
        ];
        //return to view
        return view('users.pemetaan.detail', [
            'data' => $data,
            'fungsiKeanggotaan' => $fungsiKeanggotaan,
            'defuzzy' => $defuzzy
        ]);
    }
}
