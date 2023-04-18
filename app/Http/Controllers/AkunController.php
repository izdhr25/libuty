<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index(){
        return view('pustakawan.akun.index');
    }

    public function show(){
    		
    }

    public function update(Request $request, User $akun)
    {
        $request->validate([
            'name' => 'string',
            'image' => 'image',
            'nip_nis' => 'string',
            'kode_rfid' => 'string',
            'jk' => 'string',
            'email' => 'email',
            'password' => ['string', 'min:8'],
            'telepon' => ['string', 'max:15'],
            'alamat' => 'string',
            'role_id' => 'string',
        ]);       

        $input = $request->all();

        if($image = $request->file('image')){
            $imageName = $image->getClientOriginalName();
            $tujuan_upload = 'img/userprofile';
            $image->move($tujuan_upload, $imageName);
        } else {
            unset($request['image']);
        }  

        $password = $request->password;
        $id = Auth::user()->id;

        if($image && $password == null) {
                User::where('id', $id)->update([
                    'nip_nis' => $request['nip_nis'],
                    'kode_rfid'=> $request['kode_rfid'],
                    'image' => $request['imageLama'],
                    'name' => $request['name'],
                    'jk' => $request['jk'],
                    'email' => $request['email'],
                    'password' => $request['password'],
                    'kelas' => $request['kelas'],
                    'telepon' => $request['telepon'],
                    'alamat' => $request['alamat'],
                    'status' => $request['status'],
                    'role_id' => $request['role_id'],
            ]);
        } else if($image == null && $password != null){
                User::where('id', $id)->update([
                    'nip_nis' => $request['nip_nis'],
                    'kode_rfid'=> $request['kode_rfid'],
                    'image' => $request['imageLama'],
                    'name' => $request['name'],
                    'jk' => $request['jk'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                    'kelas' => $request['kelas'],
                    'telepon' => $request['telepon'],
                    'alamat' => $request['alamat'],
                    'status' => $request['status'],
                    'role_id' => $request['role_id'],
            ]);
        } else {
            User::where('id', $id)->update([
                    'nip_nis' => $request['nip_nis'],
                    'kode_rfid'=> $request['kode_rfid'],
                    'image' => $imageName,
                    'name' => $request['name'],
                    'jk' => $request['jk'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                    'kelas' => $request['kelas'],
                    'telepon' => $request['telepon'],
                    'alamat' => $request['alamat'],
                    'status' => $request['status'],
                    'role_id' => $request['role_id'],
            ]);
        }

        return redirect('/akun')->with('message', 'Data Berhasil Diedit'); 
    }
}
