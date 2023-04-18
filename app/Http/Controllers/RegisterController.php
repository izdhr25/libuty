<?php
 
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

 
class RegisterController extends Controller
{
    use ValidatesRequests;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $kontak = Kontak::all();

        return view('tale.register', compact('kontak'));
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


        if($image == null) {
                User::create([
                    'nip_nis' => $request['nip_nis'],
                    'kode_rfid'=> $request['kode_rfid'],
                    'image' => 'profile2.jpg',
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

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silakan Login');
    }
}
