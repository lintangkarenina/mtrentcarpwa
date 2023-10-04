<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\Kontak;
use App\Models\Sewa;
use App\Models\Detail;
use App\Models\Blog;
use App\Models\Rute;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{


    // ----------------------- Controller Beranda ---------------------------- //
    public function Beranda () {

        $data_testimoni = Testimoni::all();
        $data_detail = Detail::all();

        return view ('beranda', compact('data_testimoni','data_detail'));
    }


    // ----------------------- Controller TentangKami ------------------------ //
    public function TentangKami () {
        $data_testimoni = Testimoni::all();
        return view ('about', compact('data_testimoni'));
    }


    // ----------------------- Controller Layanan --------------------------- //
    public function Layanan () {
        return view ('services');
    }


    // ----------------------- Controller Mobil ---------------------------- //
    public function Mobil () {
        $data_detail = Detail::all();
        return view ('mobil', compact('data_detail'))->with('success', 'Form Sewa Berhasil Di isi');
    }


    // ---------------------- Controller Kontak ---------------------------- //
    public function Kontak () {
        return view ('kontak');
    }
        // Create Kontak
        public function TambahKontakKami (Request $request)
        {
            $rules = [
                'subjek' => 'not_regex:/[-_!@#$%^&*()]+/',
                'pesan' => 'not_regex:/[-_!@#$%^&*()]+/'
            ];

            $messages = [
                'subjek.not_regex' => 'Subjek tidak boleh simbol seperti "- _ ! @ # $ % ^ & * ( )"',
                'pesan.not_regex' => 'Pesan tidak boleh simbol seperti "- _ ! @ # $ % ^ & * ( )"'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            Kontak::create($request->all());
            return redirect()->route('Kontak')->with('success', 'Pesan Anda Berhasil Terkirim!');
        }


    // nggak dimunculin ke navbar
    public function Blog () {
        return view ('blog', compact('data_blog'));
       
    }
    

    // --------------------------------------------------------- Controller Sewa -------------------------------------------------- //
    public function Sewa ($id) {
        
        if(is_null(auth()->user()->no_handphone) || is_null(auth()->user()->nik) || is_null(auth()->user()->upload_ktp) || is_null(auth()->user()->upload_sim)){
            return redirect('/user/'.auth()->user()->name);
        }
        $rute = Rute::all();
        $data_detail = Detail::find($id);
        return view('sewa', compact('rute','data_detail'));
        
    }

    // Create Sewa
    public function TambahSewaAdmin(Request $request)
    {
        $rules = [
            'pesan_tambahan' => 'not_regex:/[-_!@#$%^&*()]+/',
            'upload_tiket' => 'image|mimes:jpeg,png,jpg,gif',
        ];
    
        $messages = [
            'pesan_tambahan.not_regex' => 'Pesan Tambahan tidak boleh mengandung simbol seperti - _ ! @ # $ % ^ & * ( )',
            'upload_tiket.image' => 'File Tiket harus berupa gambar.',
            'upload_tiket.mimes' => 'File Tiket harus berformat JPEG, PNG, JPG, atau GIF.',
        ];
    

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $rand = date('sHiydm');
        $tiket = null; // Inisialisasi $tiket dengan null
        
        // Cek apakah file upload_tiket ada sebelum mencoba untuk mengambil nama aslinya
        if ($request->hasFile('upload_tiket')) {
            $tiket = $rand . '-' . $request->file('upload_tiket')->getClientOriginalName();
            $request->file('upload_tiket')->move('file/Sewa/', $tiket);
        }


        // $upload_ktp = hash('sha256', strtotime(date("Y/m/d H:i:s")) . rand()) . '.' . $request->file('upload_ktp')->getClientOriginalExtension() ;
       // Mendapatkan harga dari Detail berdasarkan detail_id
        $hargaDetail = Detail::findOrFail($request->detail_id)->harga;

        $tgl1 = Carbon::parse($request->tanggal_mulai_sewa);
        $tgl2 = Carbon::parse($request->tanggal_selesai_sewa);

        // Menghitung total berdasarkan harga dari Detail
        $total = $hargaDetail * $tgl1->diffInDays($tgl2);

        $data_sewa = Sewa::create([
            'user_id' => auth()->user()->id,
            'detail_id' => $request->detail_id,
            'rute_id' => $request->rute_id,
            'jenis_layanan' => $request->jenis_layanan,
            'tanggal_mulai_sewa' => $request->tanggal_mulai_sewa,
            'tanggal_selesai_sewa' => $request->tanggal_selesai_sewa,
            'pesan_tambahan' => $request->pesan_tambahan,
            'upload_tiket' => $request->hasFile('upload_tiket') ? $tiket : null,
            'total' => $total
        ]);

        if ($request->hasFile('upload_ktp')) {
            // $request->file('upload_ktp')->move('file/Sewa/', $upload_ktp);
            // $data_sewa->upload_ktp = $upload_ktp;
            $data_sewa->save();
        }

        return redirect()->route('Mobil')->with('success', 'Total biaya adalah Rp. ' . number_format($total) . "");
 }

    
    // ---------------------- Controller User ---------------------------- //
    public function User ($user_id) {
        $data_user = User::all();
        $data_sewa = Sewa::latest('created_at')->get();
        $data_testimoni = Testimoni::all();
        $data_detail = Detail::all();
        $rute = Rute::all();
        return view ('/user', compact('data_user','data_sewa','data_detail','rute'));
    }

     // Update Data User
     public function UpdateUser(Request $request, $id)
     {
         $data_user = User::find($id);
     
         // Validasi input
         $rules = [
             'name' => 'required',
             'email' => 'required|email',
             'alamat' => 'required',
             'kota' => 'required',
             'password' => 'required|min:6',
             'no_handphone' => 'required',
             'nik' => 'required',
             'pekerjaan' => 'required',
             'upload_ktp' => 'image|mimes:jpeg,png,jpg,gif',
             'upload_sim' => 'image|mimes:jpeg,png,jpg,gif',
         ];
     
         $messages = [
             'name.required' => 'Nama harus diisi.',
             'email.required' => 'Email harus diisi.',
             'email.email' => 'Format email tidak valid.',
             'alamat.required' => 'Alamat harus diisi.',
             'kota.required' => 'Kota harus diisi.',
             'password.required' => 'Password harus diisi.',
             'password.min' => 'Password harus memiliki minimal 6 karakter.',
             'no_handphone.required' => 'Nomor handphone harus diisi.',
             'nik.required' => 'NIK harus diisi.',
             'pekerjaan.required' => 'Pekerjaan harus diisi.',
             'upload_ktp.image' => 'File KTP harus berupa gambar.',
             'upload_ktp.mimes' => 'File KTP harus berformat JPEG, PNG, JPG, atau GIF.',
             'upload_sim.image' => 'File SIM harus berupa gambar.',
             'upload_sim.mimes' => 'File SIM harus berformat JPEG, PNG, JPG, atau GIF.',
         ];
     
         $validator = Validator::make($request->all(), $rules, $messages);
     
         if ($validator->fails()) {
             return redirect()->back()
                 ->withErrors($validator)
                 ->withInput();
         }

    // Handle unggahan file KTP
    if ($request->hasFile('upload_ktp')) {
        $rand = date('sHiydm');
        $ktp = $rand . '-' . $request->file('upload_ktp')->getClientOriginalName();
        $request->file('upload_ktp')->move('file/User/', $ktp);
    } else {
        $ktp = $data_user->upload_ktp; // Gunakan nilai yang ada jika tidak ada unggahan baru
    }

    // Handle unggahan file SIM
    if ($request->hasFile('upload_sim')) {
        $rand = date('sHiydm');
        $sim = $rand . '-' . $request->file('upload_sim')->getClientOriginalName();
        $request->file('upload_sim')->move('file/User/', $sim);
    } else {
        $sim = $data_user->upload_sim; // Gunakan nilai yang ada jika tidak ada unggahan baru
    }

    // Perbarui data pengguna
    $data_user->update([
        'name' => $request->name,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'kota' => $request->kota,
        'password' => Hash::make($request->password),
        'no_handphone' => $request->no_handphone,
        'nik' => $request->nik,
        'pekerjaan' => $request->pekerjaan,
        'upload_ktp' => $ktp,
        'upload_sim' => $sim,
    ]);

    return redirect()->route('User', auth()->user()->name)->with('success', 'Profil Berhasil Di Update');
    }

    // Edit Pesanan

    public function UpdateSewaUser(Request $request, $id)
{
    $data_sewa = Sewa::find($id);
    $foto = $data_sewa->upload_tiket;

    $rules = [
        'upload_tiket' => 'image|mimes:jpeg,png,jpg,gif',
    ];

    $messages = [
        'upload_tiket.image' => 'File Tiket harus berupa gambar.',
        'upload_tiket.mimes' => 'File Tiket harus berformat JPEG, PNG, JPG, atau GIF.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    if ($request->hasFile('upload_tiket')) {
        $rand = date('sHiydm');
        $foto = $rand . '-' . $request->file('upload_tiket')->getClientOriginalName();
        $request->file('upload_tiket')->move('file/Sewa/', $foto);
    }

    $hargaDetail = Detail::findOrFail($request->detail_id)->harga;

    $tgl1 = Carbon::parse($request->tanggal_mulai_sewa);
    $tgl2 = Carbon::parse($request->tanggal_selesai_sewa);

    $total = $hargaDetail * $tgl1->diffInDays($tgl2);

    $data_sewa->update([
        'detail_id' => $request->detail_id,
        'jenis_layanan' => $request->jenis_layanan,
        'tanggal_mulai_sewa' => $request->tanggal_mulai_sewa,
        'tanggal_selesai_sewa' => $request->tanggal_selesai_sewa,
        'rute_id' => $request->rute_id,
        'pesan_tambahan' => $request->pesan_tambahan,
        'upload_tiket' => $foto,
        'total' => $total
    ]);

    return redirect()->route('User', auth()->user()->name)->with('success', 'Pesanan Berhasil Di Update');
}

    // Tambah Data Testimoni
    public function TambahTestimoni(Request $request)
    {
        $rules = [
            'pesan' => 'not_regex:/[-_!@#$%^&*()]+/'
        ];

        $messages = [
            'pesan.not_regex' => 'Pesan tidak boleh simbol seperti "- _ ! @ # $ % ^ & * ( )"'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Pastikan Anda mengganti 'Testimoni' dengan model yang sesuai jika berbeda
        $data_testimoni = new Testimoni;
        $data_testimoni->user_id = auth()->user()->id; // Atau cara lain untuk mendapatkan 'user_id' yang sesuai
        $data_testimoni->pesan = $request->input('pesan');
        $data_testimoni->save();

        return redirect()->route('User', auth()->user()->name)->with('success', 'Testimoni Berhasil Ditambahkan');
    }

}