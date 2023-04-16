<?php

namespace App\Http\Controllers;

use App\Models\ArusLantas;
use App\Models\Jalan;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArusLantasController extends Controller
{
    public function index()
    {

        $data = ArusLantas::all();
        return view('dashboard.arus_lantas.index', ['data' => $data]);
    }

    public function create()
    {
        $jalan = Jalan::all();
        return view('dashboard.arus_lantas.create', ['data' => $jalan]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            // 'nama_jalan'=> 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'arah_1' => 'required',
            'arah_2' => 'required',
            'total_arah_1' => 'required',
            'total_arah_2' => 'required',
            'total_2_arah' => 'required',
        ]);

        $nama_jalan = Jalan::where('id', $request->jalans_id)->first()->nama_jalan;

        $data = $request->all();
        $data['nama_jalan'] = $nama_jalan;
        $data['slug'] = SlugService::createSlug(Jalan::class, 'slug', $nama_jalan,);
        ArusLantas::create($data);

        // dd ($data);
        if ($data) {
            return redirect()
                ->route('aruslantas.index')
                ->with([
                    'success' => 'Data Jalan Berhasil Ditambahkan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function edit($slug)
    {
        $data = DB::table('arus_lantas')->where('slug', $slug)->first();
        $jalan = Jalan::all();

        return view('dashboard.arus_lantas.edit', ['data' => $data], ['dataa' => $jalan]);
    }

    public function update(Request $request, ArusLantas $aruslanta)
    {
        // dd($aruslanta);
        $this->validate($request, [
            'nama_jalan' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'arah_1' => 'required',
            'arah_2' => 'required',
            'total_arah_1' => 'required',
            'total_arah_2' => 'required',
            'total_2_arah' => 'required',
        ]);


        $data = $request->all();
        $data['slug'] = SlugService::createSlug(ArusLantas::class, 'slug', $request->nama_jalan);
        $aruslanta->update($data);

        // dd ($request);
        if ($data) {
            return redirect()
                ->route('aruslantas.index')
                ->with([
                    'success' => 'Data Berhasil Di Update'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function destroy(ArusLantas $aruslanta)
    {
        $aruslanta->delete();
        if ($aruslanta) {
            return redirect()
                ->route('aruslantas.index')
                ->with([
                    'success' => 'Data Berhasil Dihapus'
                ]);
        } else {
            return redirect()
                ->route('post.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
