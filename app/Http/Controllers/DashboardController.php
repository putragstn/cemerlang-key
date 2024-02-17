<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\OtherService;
use App\Models\Video;
use App\Models\OurService;
use App\Models\Slogan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title'                 => 'Dashboard',
            'totalImages'           => Image::all(),
            'totalVideos'           => Video::all(),
            'totalOurServices'      => OurService::all(),
            'totalOtherServices'    => OtherService::all(),
            'slogan'                => Slogan::find(1)
        ]);
    }

    public function editSlogan()
    {
        return view('dashboard.edit-slogan', [
            'title'     => 'Ubah Slogan',
            'slogan'    => Slogan::find(1)
        ]);
    }

    public function updateSlogan(Request $request)
    {
        $request->validate([
            'judul'     => 'required',
            'deskripsi' => 'required'
        ]);

        // Get all Request
        $input = $request->all();

        // // get data by ID
        // $slogan = Slogan::find($id);

        Slogan::find($request->id)->update($input);

        // Redirect
        return redirect('/dashboard')->with('success', 'Slogan berhasil diubah.');
    }

    public function editPassword()
    {
        return view('dashboard.ganti-password', [
            'title' => 'Ubah Password',
            'user'  => auth()->user()->id
        ]);
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'password_lama' => 'required',
            // 'ulangi_password_lama' => 'required',
            'password_baru' => 'required'
        ]);

        // #Match The Old Password
        // if (!Hash::check($request->password_lama, auth()->user()->ulangi_password_lama)) {
        //     return back()->with("error", "Old Password Doesn't match!");
        // }

        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password_baru)
        ]);

        return back()->with("success", "Password berhasil diubah!");
    }

    public function editAkun()
    {
        return view('dashboard.akun', [
            'title' => 'Informasi Akun',
            'user'  => User::find(auth()->user()->id)
        ]);
    }

    public function updateAkun(Request $request)
    {
        # Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();

        #Update the new Password
        // User::whereId(auth()->user()->id)->update($input);
        User::find(auth()->user()->id)->update($input);

        return back()->with("success", "Informasi Akun berhasil diubah!");
    }
}
