<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use App\Models\Lokasi;
use App\Models\Rules;
use Illuminate\Http\Request;

class FuzzyController extends Controller
{
    public function fuzzy(Request $request)
    {
        // $data = $request->;
        // dd($request->all());

        //request data dari form
        $jam_kecelakaan = $request->jam_kecelakaan;
        $kondisi_jalan = $request->kondisi_jalan;
        $kondisi_lingkungan = $request->kondisi_lingkungan;
        $kondisi_kecelakaan = $request->kondisi_kecelakaan;
        $jalan_id = $request->nama_jalan;
        // dd($kondisi_lingkungan_kecelakaan);

        $jalan = Jalan::find($jalan_id);

        // ----------------------------------Jam Kecelakaan---------------------------------- //
        $jam = keanggotaanJam($jam_kecelakaan);
        // ----------------------------------Kondisi Jalan ---------------------------------- //
        $kondisiJalan = keanggotaanKondisiJalan($kondisi_jalan);
        // ----------------------------------Kondisi Lingkungan ---------------------------------- //
        $kondisiLingkungan = keanggotaanKondisiLingkungan($kondisi_lingkungan);
        // ----------------------------------Kondisi Kecelakaan ---------------------------------- //
        $kondisiKecelakaan = keanggotaanKondisiKecelakaan($kondisi_kecelakaan);

        // dd($jam, $kondisiJalan, $kondisiLingkungan, $kondisiKecelakaan);

        // // ----------------------------------Min-Max ---------------------------------- //
        // $Maxjam_kecelakaan = max($jam['jam_kecelakaanA'], $jam['jam_kecelakaanB'], $jam['jam_kecelakaanC'], $jam['jam_kecelakaanD']);
        // $Maxkondisi_jalan = max($kondisi_jalan['kondisi_jalanA'], $kondisi_jalan['kondisi_jalanB'], $kondisi_jalan['kondisi_jalanC']);
        // $Maxkondisi_lingkungan = max($kondisi_lingkungan['kondisi_lingkunganA'], $kondisi_lingkungan['kondisi_lingkunganB'], $kondisi_lingkungan['kondisi_lingkunganC']);
        // $Maxkondisi_kecelakaan = max($kondisi_kecelakaan['kondisi_kecelakaanA'], $kondisi_kecelakaan['kondisi_kecelakaanB'], $kondisi_kecelakaan['kondisi_kecelakaanC']);

        // $minRule = min($Maxjam_kecelakaan, $Maxkondisi_jalan, $Maxkondisi_lingkungan, $Maxkondisi_kecelakaan);

        // $minRule = round($minRule, 3);
        $rule = Rules::where('jam', $jam['kecelakaanRule'])
            ->where('kondisi_jalan', $kondisiJalan['kondisi_jalanRule'])
            ->where('kondisi_lingkungan', $kondisiLingkungan['kondisi_lingkunganRule'])
            ->where('kondisi_kecelakaan', $kondisiKecelakaan['kondisi_kecelakaanRule'])
            ->first();
        // return [
        //     'jam' => $jam,
        //     'kondisi_jalan' => $kondisi_jalan,
        //     'kondisi_lingkungan' => $kondisi_lingkungan,
        //     'kondisi_kecelakaan' => $kondisi_kecelakaan,
        //     'rule' => $rule,
        // ];

        // dd($rule);
        // ---------------------------------- Luas dan Moment ---------------------------------- //
        // $luasMoment = hitungLuasMoment($rule->tingkat_kerawanan, $minRule);

        // ---------------------------------- Defuzzyfikasi ---------------------------------- //
        // $deffuzy = $luasMoment['totalMoment'] / $luasMoment['totalLuas'];

        Lokasi::create([
            'jalan_id' => $jalan_id,
            'alamat' => $request->alamat,
            'latitude' => $request->lattitude,
            'longitude' => $request->longitude,
            'jam_kecelakaan' => $jam_kecelakaan,
            'kondisi_jalan' => $kondisi_jalan,
            'kondisi_lingkungan' => $kondisi_lingkungan,
            'kondisi_kecelakaan' => $kondisi_kecelakaan,
            'tingkat_kerawanan' => $rule->tingkat_kerawanan,
            'rules_id' => $rule->id,
        ]);
        // dd($lokasi);

        //if has auth return to dashboard if not return to home
        if (auth()->user()) {
            return redirect()->route('daerahrawan.index')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('pemetaan')->with('success', 'Data Berhasil Ditambahkan');
        }
    }
}
