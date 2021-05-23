<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $title = 'Customer';
        $data = Customer::get();

        return view('customer.index', compact('title', 'data'));
    }

    public function add()
    {
        $title = 'Tambah Customer';

        return view('customer.add', compact('title'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $data['id'] = \Uuid::generate(4);
        $data['email'] = $request->email;
        $data['nama'] = $request->nama;
        $data['no_hp'] = $request->no_hp;
        $data['alamat'] = $request->alamat;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $simpan = Customer::insert($data);

        if ($simpan) {
            alert()->success('Berhasil', 'Data Sudah Tersimpan.');
            return redirect('customer');
        } else {
            alert()->error('Gagal', 'Data Tidak Tersimpan.');
            return redirect('customer');
        }

        return redirect('customer');
    }

    public function edit($id)
    {
        $dt = Customer::find($id);
        $title = "Edit Customer $dt->nama";

        return view('customer.edit', compact('title', 'dt'));
    }

    public function update(Request $request, $id)
    {
        $data['email'] = $request->email;
        $data['nama'] = $request->nama;
        $data['no_hp'] = $request->no_hp;
        $data['alamat'] = $request->alamat;
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = Customer::where('id', $id)->update($data);

        if ($update) {
            alert()->success('Berhasil', 'Data Berhasil Diedit');
            return redirect('customer');
        } else {
            alert()->error('Gagal', 'Data Gagal Diedit');
            return redirect('customer');
        }
    }

    public function delete(Request $request)
    {

        $delete = Customer::findOrFail($request->data);

        $delete->delete();

        if ($delete) {
            alert()->success('Berhasil', 'Data Telah dihapus');
            return redirect('customer');
        } else {
            alert()->error('Gagal', 'Data Belum dihapus');
            return redirect('customer');
        }
    }
}
