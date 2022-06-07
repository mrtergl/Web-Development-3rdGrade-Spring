<?php

use App\Mail\SifreMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\sistemyoneticisi;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TheseController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\System_ManagerController;

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

Route::get('/', function () {
    return view('ogrenci.ogrlogin');
});

//DB-CONTROLLER-MODEL 
Route::get('/ogrenciekran/{id}', [StudentController::class, 'getStudent'])->name('getStudent');
Route::get('project', [ProjectController::class, 'getProject']);
Route::get('report', [ReportController::class, 'getReport']);
Route::get('teacher', [TeacherController::class, 'getTeacher']);
Route::get('systemManager', [System_ManagerController::class, 'getSystemManager']);
Route::get('fakulte', [FacultyController::class, 'getFaculty']);
Route::get('departman', [DepartmanController::class, 'getDepartman']);
Route::get('sistem', [SystemController::class, 'getSystem']);
Route::get('tez', [TeacherController::class, 'tezler']);

//Giriş Ekranları
Route::post('adminLogin', [TeacherController::class, 'login']);
Route::post('adminlogin', [System_ManagerController::class, 'login']);
Route::post('ogrgiris', [StudentController::class, 'login']);
Route::view('danismangiris', 'danisman.danismangiris');
Route::view('yoneticigiris', 'yonetici.yoneticigiris');



//Yönetici Ekranları
Route::get('yoneticiekran/{id}', [System_ManagerController::class, 'adminpanel']);
Route::post('donem-kaydet', [System_ManagerController::class, 'donemKaydet']);
Route::get('yoneticiprofil/{id}', [System_ManagerController::class, 'profil']);
Route::post('yonetici-guncelle', [System_ManagerController::class, 'profilUpdate']);
Route::get('danismanlarigoruntule/{id}', [System_ManagerController::class, 'danismanlar']);
Route::get('danismanekle/{id}', [System_ManagerController::class, 'teacherPage']);
Route::post('danisman-kaydet', [System_ManagerController::class, 'danismanEkle']);
Route::get('danisman-ogr-goruntule/{danisman_id}', [System_ManagerController::class, 'ogrGoruntule']);
Route::post('ogrenci-kaydet', [System_ManagerController::class, 'kaydet']);
Route::get('ogrencigoruntule/{id}', [System_ManagerController::class, 'ogrenciler']);
Route::get('ogrenciekle/{id}', [System_ManagerController::class, 'ekle']);

//Danışman Ekranları
Route::get('profil/{id}', [TeacherController::class, 'danismanPanel']);
Route::get('gelenTezler/{id}', [TeacherController::class, 'tezler'])->name('gelenTezler');
Route::get('onaylananTezler/{id}', [TeacherController::class, 'tezler'])->name('onaylananTezler');
Route::get('reddedilenTezler/{id}', [TeacherController::class, 'tezler'])->name('reddedilenTezler');
Route::get('gelenRaporlar/{id}', [TeacherController::class, 'raporlar'])->name('gelenRaporlar');
Route::get('onaylananRaporlar/{id}', [TeacherController::class, 'raporlar'])->name('onaylananRaporlar');
Route::get('reddedilenRaporlar/{id}', [TeacherController::class, 'raporlar'])->name('reddedilenRaporlar');
Route::get('gelenProjeler/{id}', [TeacherController::class, 'projeler'])->name('gelenProjeler');
Route::get('onaylananProjeler/{id}', [TeacherController::class, 'projeler'])->name('onaylananProjeler');
Route::get('reddedilenProjeler/{id}', [TeacherController::class, 'projeler'])->name('reddedilenProjeler');
Route::post('projeOnay', [TeacherController::class, 'projeOnayla']);
Route::post('projeRed', [TeacherController::class, 'projeReddet']);
Route::post('tezOnay', [TeacherController::class, 'tezOnayla']);
Route::post('tezRed', [TeacherController::class, 'tezReddet']);
Route::post('raporOnay', [TeacherController::class, 'raporOnayla']);
Route::post('raporRed', [TeacherController::class, 'raporReddet']);
Route::post('danismanEpostaGüncelle', [TeacherController::class, 'epostaGüncelle']);
Route::get('ogrenciListesi/{id}', [TeacherController::class, 'ogrenciler']);
Route::post('projeYorumEkle', [TeacherController::class, 'projeYorumKaydet']);


//Öğrenci Ekranları
Route::post('/setUpdate', [StudentController::class, 'setUpdate'])->name('post.ogrenci.profil');
Route::get('/ogrenci-profil/{id?}', [StudentController::class, 'getUpdate'])->name('ogrenci.profil');
Route::get('projeonerisi/{id}', [StudentController::class, 'ProjectPage']);
Route::get('projeraporu/{id}', [ReportController::class, 'getReport']);
Route::get('tezraporu/{id}', [TheseController::class, 'getThese']);
Route::post('projeoneri-kaydet', [StudentController::class, 'getProject']);
Route::post('projerapor-kaydet', [ReportController::class, 'saveReport']);
Route::post('tezrapor-kaydet', [TheseController::class, 'saveThese']);
Route::get('danismanbilgisi/{id}', [StudentController::class, 'getTeacher']);


