<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Testimoni;
use App\Models\Detail;
use App\Models\Sewa;
use App\Models\User;
use App\Models\Rute;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function Beranda () {
        return view ('/admin/beranda');
    }

    // -------------------------- Controller Testimoni ----------------------------- //

public function Testimoni () {
    $data_testimoni = Testimoni::latest('created_at')->get();
    return view ('/admin/testimoni', ['testimoni' => $data_testimoni]);
}

// Tambah Data Testimoni
public function TambahTestimoni (Request $request){
    Testimoni::create($request->all());
    return redirect()->route('Testimoni')->with('success', 'Data Berhasil Di Tambah');
}

// Update Data Testimoni
public function UpdateTestimoni (Request $request, $id) {
    $data_testimoni = Testimoni::find($id);
    $data_testimoni->update($request->all());
    return redirect()->route('Testimoni')->with('success', 'Data Berhasil Di Update');
}

// Delete Data Testimoni
public function DeleteTestimoni($id){
    $data_testimoni = Testimoni::find($id);
    $data_testimoni->delete();
    return redirect()->route('Testimoni');
}


    // -------------------------- Controller Rute ----------------------------- //

        public function Rute () {
            $data_rute = Rute::all();
            return view ('/admin/rute', ['rute' => $data_rute]);
        }

        // Tambah Data Rute
        public function TambahRute (Request $request){
            $data_rute = Rute::create($request->all());

            return redirect()->route('Rute')->with('success', 'Data Berhasil Di Tambah');
        }

        // Update Data Rute
        public function UpdateRute (Request $request, $id) {
            $data_rute = Rute::find($id);

            $data_rute->rute = $request->rute;
            $data_rute->hari = $request->hari;
            $data_rute->save(); 

            return redirect()->route('Rute')->with('success', 'Data Berhasil Di Update');
        }

        // Delete Data Rute
        public function DeleteRute($id){
            $data_rute = Rute::find($id);
            $data_rute->delete();
            return redirect()->route('Rute');
        }

    // -------------------------- Controller Sewa --------------------------------//
    public function Sewa () {
        $data_sewa = Sewa::latest('created_at')->get();
        return view ('/admin/sewa-admin', ['sewa' => $data_sewa]);
    }
        // Tambah Data Sewa
            // public function TambahSewa (Request $request){
            //     Sewa::create($request->all());
            //     return redirect()->route('Sewa');
            // }

        // Update Data Sewa
        public function UpdateSewaAdmin(Request $request, $id) {
            $data_sewa = Sewa::find($id);
        
            $data_sewa->status = $request->status;
            $data_sewa->jam_pengambilan = $request->jam_pengambilan;
            $data_sewa->jam_pengembalian = $request->jam_pengembalian;
        
            $datetime1 = Carbon::parse($request->jam_pengambilan);
            $datetime2 = Carbon::parse($request->jam_pengembalian);
            
            // Calculate the time difference in hours
            $timeDifference = $datetime2->diffInHours($datetime1);
            
            if ($timeDifference >= 1) {
                // Calculate the late return fee with an additional 25,000 for each additional hour
                $totalDenda = 25000 * $timeDifference;
            } else {
                // No late fee
                $totalDenda = 0;
            }
            
            // Store the total late fee in $data_sewa->denda
            $data_sewa->denda = $totalDenda;
        
            // Hitung jumlah total, termasuk denda
            $total = $request->total + $totalDenda;
            $data_sewa->total = $total;
        
            $data_sewa->save();
        
            return redirect()->route('Sewa-Admin')->with('success', 'Data Berhasil Di Update');
        }
        
        

        // Delete Data Sewa
        public function DeleteSewaAdmin($id){
            $data_sewa = Sewa::find($id);
            $data_sewa -> delete();
            return redirect()->route('Sewa-Admin');
        }


    
    // -------------------------- Controller Detail --------------------------------//
    public function Detail () {
        $data_detail = Detail::all();
        return view ('/admin/detail', ['detail' => $data_detail]);
    }
        // Tambah Data Detail - Kami
        public function TambahDetail(Request $request){
            $rand = date('sHiydm');
            $gambar = $rand.'-'.$request->file('gambar')->getClientOriginalName();

            $data_detail = Detail::create($request->all());
                
                if($request -> hasFile('gambar')){
                    $request-> file('gambar')->move('file/Detail/', $gambar);
                    $data_detail->gambar = $gambar;
                    $data_detail->save();
                }
            return redirect()->route('Detail')->with('success', 'Data Berhasil Di Tambah');
        }

        // Update Data Detail - Kami
        public function UpdateDetail(Request $request, $id) {
            $data_detail = Detail::find($id);
            $foto = $data_detail->gambar;
            if($request -> file('gambar')){
                $rand = date('sHiydm');
                $gambar = $rand.'-'.$request->file('gambar')->getClientOriginalName();
                $request-> file('gambar')->move('file/Detail/', $gambar);
                $foto = $gambar;
            }
            $data_detail->gambar = $foto;
            $data_detail->status = $request->status;
            $data_detail->nama_mobil = $request->nama_mobil;
            $data_detail->harga = $request->harga;
            $data_detail->bahan_bakar = $request->bahan_bakar;
            $data_detail->jumlah_kursi = $request->jumlah_kursi;
            $data_detail->penumpang = $request->penumpang;
            $data_detail->tahun = $request->tahun;
            $data_detail->transmisi = $request->transmisi;
            $data_detail->fasilitas = $request->fasilitas;
            $data_detail->save(); 
        
            return redirect()->route('Detail')->with('success', 'Data Berhasil Di Update');
        }

        // Delete Data Detail - Kami
        public function DeleteDetail($id){
            $data_detail = Detail::find($id);
            $data_detail -> delete();
            return redirect()->route('Detail');
        }


    // -------------------------- Controller Kontak --------------------------------- //
    public function Kontak () {
        $data_kontak = Kontak::latest('created_at')->get();
        return view ('/admin/kontak-kami', ['kontak' => $data_kontak]);
    }
        // Tambah Data Kontak - Kami
            // public function TambahKontakKami (Request $request){

            //     Kontak::create($request->all());
            //     return redirect()->route('Kontak-Kami');
            // }

        // Update Data Kontak - Kami
            public function UpdateKontakKami (Request $request, $id) {
                $data_kontak = Kontak::find($id);
                $data_kontak -> update($request->all());
                return redirect()->route('Kontak-Kami')->with('success', 'Data Berhasil Di Update');
            }

        // Delete Data Kontak - Kami
            public function DeleteKontakKami($id){
                $data_kontak = Kontak::find($id);
                $data_kontak -> delete();
                return redirect()->route('Kontak-Kami');
            }




    // -------------------------- Controller User --------------------------------- //
    public function User () {
        $data_user = User::latest('created_at')->get();
        return view ('/admin/user', ['user' => $data_user]);
    }
        // Tambah Data Kontak - Kami
            // public function TambahKontakKami (Request $request){

            //     Kontak::create($request->all());
            //     return redirect()->route('Kontak-Kami');
            // }

        // Update Data User
            public function UpdateUserAdmin (Request $request, $id) {
                $data_user = User::find($id);
                $data_user -> update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
                return redirect()->route('UserAdmin')->with('success', 'Data Berhasil Di Update');
            }

        // Delete Data User
            public function DeleteUser($id){
                $data_user = User::find($id);
                $data_user -> delete();
                return redirect()->route('UserAdmin');
            }
            
}
