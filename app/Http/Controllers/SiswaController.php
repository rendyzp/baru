<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Siswa::all();
    }
    public function index2()
    {
        $siswa = Siswa::all();
        $nilai = Nilai::all();

        $results = [];
        foreach ($siswa as $siswa) {
            $nilai = $nilai->where('id_mataPelajaran', $siswa->id_mataPelajaran)->first();
            if ($nilai) {
                $nilaiPerMataPelajaran = (0.15 * $nilai->latihanSoal1) + (0.20 * $nilai->ulanganHarian1) + (0.25 * $nilai->ulanganTengahSemester) + (0.40 * $nilai->ulanganSemester);
                $results[] = [
                    'siswa' => $siswa,
                    'nilaiPerMataPelajaran' => $nilaiPerMataPelajaran
                ];
            }
        }
    }
    public function index3()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create($request->all());
        return "berhasil insert";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
