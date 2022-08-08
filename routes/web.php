<?php

use App\Models\Data;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/migrate", function () {
    Artisan::call("migrate");
    return redirect("/");
});

Route::get("/tes", function () {
    return view("tes");
});

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
})->name("login");

Route::post('/login', function (Request $request) {
    if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        return redirect("/pesan");
    } else {
        return back()->with("pesan", "Username atau password salah");
    }
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect("/");
});
Route::get('/pesan', function () {
    $pesan = Pesan::all();
    return view('pesan', compact("pesan"));
})->middleware("auth");

Route::get('/data', function () {
    $data = Data::all();
    return view('data', compact("data"));
})->middleware("auth");

Route::post('/send', function (Request $request) {
    $pesan = Pesan::create([
        "isi" => $request->isi
    ]);
    $request["pesan_id"] = $pesan->id;
    Data::create($request->only("pesan_id", "browser", "os", "platform", "source"));

    return back()->with("pesan", "Berhasil mengirim pesan");
});
