<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

$user = User::find(1);
$user->is_admin = true;
$user->save();
class MainController extends Controller
{
    //


    public function showLoginForm(){
        return view('Akun.regis');
    }
    public function regis(request $req){
        $this->validate($req, [
            'buat_name' => "required",
            'buat_email' => "required",
            'buat_password' => "required",
        ]);

        $user = new User();
        $user->name = $req->buat_name;
        $user->email = $req->buat_email;
        $user->password = Hash::make($req->buat_password);

        if($user->save()) {
            // return redirect()->refresh();
        } else {
            dd("Data gagal Disimpan");
        }
    }
    public function destroy(Job $job)
{
    $job->delete();

    return redirect()->back()->with('success', 'Pekerjaan berhasil dihapus.');
}

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Mencoba login dengan kredensial yang diberikan
        if (Auth::attempt($request->only('email', 'password'))) {
            // Regenerasi sesi untuk keamanan
            $request->session()->regenerate();

            // Redirect ke halaman profil atau halaman yang ditentukan
            return redirect('/');
        }

        // Jika login gagal, kembali dengan pesan kesalahan
        dd($request->all());
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Ubah redirect ke halaman yang diinginkan
    }


    public function detail(){
        return view('jobs.detail');
    }
    public function add(){
        return view('jobs.create');
    }

    public function index()
    {
        $jobs = Job::with('study')->get();
        return view('welcome', compact('jobs'));
    }
}
