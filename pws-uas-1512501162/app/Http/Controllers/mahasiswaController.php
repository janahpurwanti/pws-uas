<?php

namespace App\Http\Controllers;
use App\ModelMhs;
use App\Http\TransformerMahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
		$data = ModelMhs::all();
		return response($data);
	}

	public function show($nim){
		$data = ModelMhs::where('nim',$nim)->get();
		return response ($data);
	}

	public function store(Request $request){
		$data = new ModelMhs();
		$data->nim = $request->input('nim');
		$data->nama = $request->input('nama');
		$data->alamat = $request->input('alamat');
		$data->email = $request->input('email');
		$data->ttl = $request->input('ttl');
		$data->hoby = $request->input('hoby');
		$data->telp = $request->input('telp');
		$data->fakultas = $request->input('fakultas');
		$data->save();

		return response('Berhasil Tambah Data');
	}
	
	public function update(Request $request, $nim){
		$data = ModelMhs::where('id',$nim)->first();
		$data->nim = $request->input('nim');
		$data->nama = $request->input('nama');
		$data->alamat = $request->input('alamat');
		$data->email = $request->input('email');
		$data->ttl = $request->input('ttl');
		$data->hoby = $request->input('hoby');
		$data->telp = $request->input('telp');
		$data->fakultas = $request->input('fakultas');
		$data->save();


		return response('Berhasil Merubah Data');
	}

	public function destroy($nim){
		$data = ModelMhs::where('id',$nim)->first();
		$data->delete();

		return response('Berhasil Menghapus Data');
	}
	
}