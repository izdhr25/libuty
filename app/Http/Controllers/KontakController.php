<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KontakController extends Controller
{
    public function index()
    {
    	$kontaks = Kontak::all(); 
        return view('pustakawan.kontak.index', compact('kontaks'));
    }

    public function create()
    {
        return view('pustakawan.kontak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        	'LogoDash' => 'required',
        	'LogoWeb' => 'required',
            'instagram' => 'required',
	        'whatsapp' => 'required',
	        'email' => 'required',
	        'alamat' => 'required',
        ]);       
        
		if($image = $request->file('LogoDash')){
            $imageNameDash = $image->getClientOriginalName();
            $tujuan_upload = 'img/logo';
            $image->move($tujuan_upload, $imageNameDash);
        } 

        if($image = $request->file('LogoWeb')){
            $imageNameWeb = $image->getClientOriginalName();
            $tujuan_upload = 'img/logo';
            $image->move($tujuan_upload, $imageNameWeb);
        }
        Kontak::create([
            'LogoDash' => $imageNameDash,
            'LogoWeb' => $imageNameWeb,
			'instagram' => $request['instagram'],
	        'whatsapp' => $request['whatsapp'],
	        'email' => $request['email'],
	        'alamat' => $request['alamat'],
        ]);

        return redirect('/kontak')->with('message', 'Data Berhasil Ditambah'); 
    }

    public function show()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        	'LogoDash' => ['image', 'nullable'],
        	'LogoWeb' => ['image', 'nullable'],
            'instagram' => 'string',
	        'whatsapp' => 'string',
	        'email' => ['string', 'email'],
	        'alamat' => 'string',
        ]);       

        $kontak = Kontak::findOrFail($id);

	    if ($request->has('LogoDash') && $request->has('LogoWeb') && $request->file('LogoDash') == null && $request->file('LogoWeb') == null) {
	        $kontak->update([
	            'instagram' => $request['instagram'],
	            'telepon' => $request['telepon'],
	            'email' => $request['email'],
	            'alamat' => $request['alamat'],
	        ]);
	    } else {
	        // Handle the LogoDash image upload and update
	        if ($request->has('LogoDash') && $request->file('LogoDash') != null) {
	        	$LogoDash = $request->file('LogoDash');
	            $imageNameDash = $LogoDash->getClientOriginalName();
	            $tujuan_upload = 'img/logo';
	            $LogoDash->move($tujuan_upload, $imageNameDash);
	            $kontak->LogoDash = $imageNameDash;
	        } else {
            unset($request['LogoDash']);
        	}

	        // Handle the LogoWeb image upload and update
	        if ($request->has('LogoWeb') && $request->file('LogoWeb') != null) {
	        	$LogoWeb = $request->file('LogoWeb');
	            $imageNameWeb = $LogoWeb->getClientOriginalName();
	            $tujuan_upload = 'img/logo';
	            $LogoWeb->move($tujuan_upload, $imageNameWeb);
	            $kontak->LogoWeb = $imageNameWeb;
	        } else {
            unset($request['LogoWeb']);
        	}


	        // Update the contact data in the database
	        $kontak->update([
	            'instagram' => $request['instagram'],
	            'telepon' => $request['telepon'],
	            'email' => $request['email'],
	            'alamat' => $request['alamat'],
	        ]);
	    }

        return redirect('/kontak')->with('message', 'Data Berhasil Diedit'); 
    }

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect('/kontak')->with('message', 'Data Berhasil Dihapus'); 
    }
}