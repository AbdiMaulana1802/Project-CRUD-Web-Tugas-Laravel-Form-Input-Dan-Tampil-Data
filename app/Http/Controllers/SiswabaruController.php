<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

class SiswabaruController extends Controller
{
    public function index()
    {
        $csb =  Calonsiswa::all();
        return view('indexcalonsiswa', ['calonsiswa' => $csb]);
    }
    public function delete(Calonsiswa $calonsiswa)
    {
        $calonsiswa->delete();
        return redirect()->route('calonsiswa.index')->with('pesanhapus', "Hapus Data $calonsiswa->nama berhasil");
    }
    public function viewform(Calonsiswa $calonsiswa)
    {
        //dd($calonsiswa);
        return view('edit-form', ['calonsiswa' => $calonsiswa]);
    }
    public function prosesEdit(Request $request, Calonsiswa $calonsiswa)
    {
        $validateData = $request->validate([

            'noppdb' => 'required|size:10',
            'nama' => 'required|min:3|max:60',
            'asal_sekolah' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',

        ]);
        Calonsiswa::where('id', $calonsiswa->id)->update($validateData);
        return redirect()->route('calonsiswa.index')->with('pesanhapus', "Edit Data $calonsiswa->nama berhasil");
    }
}