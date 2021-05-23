<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    public function index()
    {

        $title = 'Paket Laundry';
        $data = Paket::get();

        return view('paket.index', compact('title', 'data'));
    }

    public function add()
    {
        $title = 'Tambah Paket Laundry';

        return view('paket.add', compact('title'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
        ]);

        $data['id'] = \Uuid::generate(4);
        $data['nama'] = $request->nama;
        $data['harga'] = $request->harga;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $simpan = Paket::insert($data);

        if ($simpan) {
            alert()->success('Berhasil', 'Data Sudah Tersimpan.');
            return redirect('paket-laundry');
        } else {
            alert()->error('Gagal', 'Data Tidak Tersimpan.');
            return redirect('paket-laundry');
        }

        return redirect('paket-laundry');
    }

    public function edit($id)
    {
        $dt = Paket::find($id);
        $title = "Edit Paket $dt->nama";

        return view('paket.edit', compact('title', 'dt'));
    }

    public function update(Request $request, $id)
    {
        $data['nama'] = $request->nama;
        $data['harga'] = $request->harga;
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = Paket::where('id', $id)->update($data);

        if ($update) {
            alert()->success('Berhasil', 'Data Berhasil Diedit');
            return redirect('paket-laundry');
        } else {
            alert()->error('Gagal', 'Data Gagal Diedit');
            return redirect('paket-laundry');
        }
    }

    public function delete(Request $request)
    {

        $delete = Paket::findOrFail($request->data);

        $delete->delete();

        if ($delete) {
            alert()->success('Berhasil', 'Data Telah dihapus');
            return redirect('paket-laundry');
        } else {
            alert()->error('Gagal', 'Data Belum dihapus');
            return redirect('paket-laundry');
        }
    }
}
