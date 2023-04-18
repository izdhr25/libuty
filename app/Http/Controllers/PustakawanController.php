<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PustakawanController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('query');   
    	$akunpustakawans = User::where('role_id', '1')->when($keyword, function ($query, $keyword) {
            return $query->where(function ($query) use ($keyword) {
                 $query->where('isbn', 'like', "%$keyword%")
                       ->orWhere('alamat', 'like', "%$keyword%")
                       ->orWhere('kode_rfid', 'like', "%$keyword%")
                       ->orWhere('email', 'like', "%$keyword%")
                       ->orWhere('jk', 'like', "%$keyword%")
                       ->orWhere('kelas', 'like', "%$keyword%")
                       ->orWhere('telepon', 'like', "%$keyword%")
                       ->orWhere('name', 'like', "%$keyword%")
                       ->orWhere('nip_nis', 'like', "%$keyword%")
                       ->orWhere('status', 'like', "%$keyword%");
            });
         })
        ->paginate(5);
        return view('pustakawan.akunpustakawan.index', compact('akunpustakawans'));
    }

    public function create()
    {
        return view('pustakawan.akunpustakawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip_nis' => 'required',
            'kode_rfid' => 'required',
            'image' => 'image',
            'name' => 'required',
            'jk' => 'required',
            'email' => ['string', 'email', 'max:255'],
            'password' => 'required',
            'kelas' => 'nullable',
            'telepon' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'role_id' => 'required',
        ]);       

        $input = $request->all();

        if($image = $request->file('image')){
            $imageName = $image->getClientOriginalName();
            $tujuan_upload = 'img/userprofile';
            $image->move($tujuan_upload, $imageName);
        } 

        $password = $request->password;
        $id = $request->id;

        if($image && $password == null) {
                User::create([
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
                User::create([
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
                User::create([
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



        return redirect('/akunpustakawan')->with('message', 'Data Berhasil Ditambahkan'); 
    }

    public function show()
    {
        //
    }

 
    public function edit(User $akunpustakawan)
    {
        return view('pustakawan.akunpustakawan.edit', compact('akunpustakawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $akunpustakawan)
    {
        $request->validate([
            'nip_nis' => 'string',
            'kode_rfid' => 'string',
            'image' => 'image',
            'name' => 'string',
            'jk' => 'string',
            'email' => ['string', 'email', 'max:255'],
            'password' => 'string',
            'kelas' => 'nullable',
            'telepon' => 'string',
            'alamat' => 'string',
            'status' => 'string',
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
        $id = $request->id;

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

        return redirect('/akunpustakawan')->with('message', 'Data Berhasil Diedit'); 
    }

    public function destroy(User $akunpustakawan)
    {
        $akunpustakawan->delete();

        return redirect('/akunpustakawan')->with('message', 'Data Berhasil Dihapus'); 
    }
}
