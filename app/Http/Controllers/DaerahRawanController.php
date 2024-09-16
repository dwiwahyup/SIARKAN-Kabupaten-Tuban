<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Models\Jalan;

class DaerahRawanController extends Controller
{
    public function index()
    {
        $data = Lokasi::with('jalan')->orderBy('created_at', 'desc')->get();
        $jalan = Jalan::all();
        // dd($jalan);
        return view('dashboard.daerah_rawan.index', ['data' => $data, 'jalan' => $jalan]);
    }

    public function detail()
    {
        return view('dashboard.daerah_rawan.detail');
    }

    //show data
    public function show($id)
    {
        $data = Lokasi::where('id', $id)->with(['rules', 'jalan'])->first();

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
        // dd($luasMoment);
        $luasA1 = $luasMoment['luasA1'];
        $luasA2 = $luasMoment['luasA2'];
        $luasA3 = $luasMoment['luasA3'];
        // dd($luasA1, $luasA2, $luasA3);

        $momentSatu = $luasMoment['momentSatu'];
        $momentDua = $luasMoment['momentDua'];
        $momentTiga = $luasMoment['momentTiga'];

        // ---------------------------------- Defuzzyfikasi ---------------------------------- //
        $defuzzy = $luasMoment['totalMoment'] / $luasMoment['totalLuas'];

        $fungsiKeanggotaan = [
            'jam' => $Maxjam_kecelakaan,
            'kondisi_jalan' => $Maxkondisi_jalan,
            'kondisi_lingkungan' => $Maxkondisi_lingkungan,
            'kondisi_kecelakaan' => $Maxkondisi_kecelakaan,
        ];
        return view('dashboard.daerah_rawan.detail', [
            'data' => $data,
            'keanggotaan' => $fungsiKeanggotaan,
            'luasA1' => $luasA1,
            'luasA2' => $luasA2,
            'luasA3' => $luasA3,
            'momentSatu' => $momentSatu,
            'momentDua' => $momentDua,
            'momentTiga' => $momentTiga,
            'defuzzy' => $defuzzy,
        ]);
    }

    public function delete(Lokasi $lokasi)
    {
        // dd($lokasi);
        $lokasi->delete();
        if ($lokasi) {
            return redirect()
                ->route('daerahrawan.index')
                ->with([
                    'success' => 'Data Jalan Berhasil Dihapus',
                ]);
        } else {
            return redirect()
                ->route('daerahrawan.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again',
                ]);
        }
    }
}
