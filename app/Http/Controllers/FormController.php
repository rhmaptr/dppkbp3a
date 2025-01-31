<?
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function index()
    {
        return view('tindakankb');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|digits:16|unique:users,nik',
            'ttl' => 'required|date',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|regex:/^[0-9]{10,15}$/',
            'status' => 'required|string',
            'jml_anak' => 'required|integer|min:0',
            'umur_anak' => 'required|integer|min:0',
            'jml_anggota' => 'required|integer|min:1',
            'category' => 'required',
            'keluhan' => 'required',
        ]);

        // Simpan data ke database
        User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'status' => $request->status,
            'jml_anak' => $request->jml_anak,
            'umur_anak' => $request->umur_anak,
            'jml_anggota' => $request->jml_anggota,
            'category' => $request->category,
            'keluhan' => $request->keluhan,
        ]);

        // Redirect ke halaman admin dengan pesan sukses
        return redirect()->route('landing')->with('success', 'Data berhasil disimpan.');
    }

    public function down()
    {
        $users = User::all();
        return view('pengaduan', compact('users'));
    }
}