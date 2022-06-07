<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\System;
use App\Mail\SifreMail;
use App\Models\Faculty;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\SystemManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Providers\AppServiceProvider;
use Illuminate\Contracts\View\Factory;

class System_ManagerController extends Controller
{
    public function ogrenciler(Request $request)
    {
        $id = $request->id;
        $ogrenciler = Student::all();
        return view('yonetici.ogrencigoruntule',compact('ogrenciler','id'));
    }

    public function teacherPage(Request $request)
    {
       $id = $request->id;
       $bolum = Department::all();
    $fakulte = Faculty::all();
       return view('yonetici.danismanekle', compact('fakulte','bolum','id'));
    }

    public function kaydet(Request $request)
    {
        $sayfa = $request->id;
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $mailp = substr( str_shuffle( $chars ), 0, 8 );
        $password = base64_encode($mailp);
        $danismanArray = Teacher::pluck('danisman_id')->toArray();

        do{
            $n = array_rand($danismanArray);
            $teacher_id = $danismanArray[$n];
        }while(Student::where('danisman_id', $teacher_id)->count()>9);
        
        $sistem = new System();

        $sistem->kullanici_no = $request->input('ogr_no');
        $sistem->sifre = $password;
        $sistem->save();

        $eposta = $request->input('eposta');
        $array = [
            'name' => $request->input('ad'),
            'surname' => $request->input('soyad'),
            'password'=>  $mailp,
            'no' => $request->input('ogr_no')
        ];

        $ogrenci = new Student();
      
        $file = $request->file('image');
        $filename = $request->input('ogr_no').'.jpg';
        $file->move('assets/ogrenci/',$filename);
        $ogrenci->fotograf = $filename;

        $ogrenci->ad = $request->input('ad');
        $ogrenci->soyad = $request->input('soyad');
        $ogrenci->sinif = $request->input('sinif');
        $ogrenci->fakulte_id = $request->input('fakulte');
        $ogrenci->bolum_id = $request->input('bolum');
        $ogrenci->ogr_no = $request->input('ogr_no');
        $ogrenci->eposta = $request->input('eposta');
        $ogrenci->telefon = $request->input('telefon');
        $ogrenci->fotograf = $filename;
        $ogrenci->danisman_id = $teacher_id;
        $ogrenci->save();
       
        Mail::send('mail.mail',$array, function($message) use($eposta){
            $message->to($eposta)->subject('KOÜ PROJE TAKİP SİSTEMİ');
    
        });

        return redirect()->back()->with('status','Ogrenci Eklendi');
    }

    public function ekle(Request $request)
    {
        $id = $request->id;
        $bolum = Department::all();
        $fakulte = Faculty::all();

        return view('yonetici.ogrenciekle', compact('fakulte','bolum','id'));
    }

    public function profil(Request $request)
    {
        $id = $request->id;
        $bilgiler = SystemManager::where('yonetici_id',$id)->get();
        return view('yonetici.yoneticiprofil', compact('bilgiler','id'));
    }

    public function profilUpdate(Request $request)
    {
        $yonetici_id = $request->id;
        $bilgiler = SystemManager::where("yonetici_id", '1')->first();


        $bilgiler->ad = $request->input('ad');
        $bilgiler->soyad = $request->input('soyad');
        $bilgiler->eposta = $request->input('eposta');
        $bilgiler->sifre = $request->input('sifre');
        $bilgiler->update();
        return redirect()->back()->with('status','Mesaj');
    }

    public function danismanEkle(Request $request)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $mailp = substr( str_shuffle( $chars ), 0, 8 );
        $password = base64_encode($mailp);


        $eposta = $request->input('eposta');
        $array = [
            'name' => $request->input('ad'),
            'surname' => $request->input('soyad'),
            'password'=>  $mailp,
            'no' => $request->input('numara')
        ];

        Mail::send('mail.mail',$array, function($message) use($eposta){
            $message->to($eposta)->subject('KOÜ PROJE TAKİP SİSTEMİ');
        });

        $danisman = new Teacher();

        $danisman->ad = $request->input('ad');
        $danisman->soyad = $request->input('soyad');
        $danisman->danisman_id = $request->input('numara');
        $danisman->unvan = $request->input('unvan');
        $danisman->eposta = $request->input('eposta');
        $danisman->fakulte_id = $request->input('fakulte');
        $danisman->bolum_id = $request->input('bolum');
        $danisman->sifre = $password;

        $danisman->save();

        return redirect()->back()->with('status','Danışman Eklendi !');


    }

    public function danismanlar(Request $request)
    {
        $id = $request->id;
        $danismanlar = Teacher::all();
        return view('yonetici.danismanlarigoruntule', compact('danismanlar','id'));
    }

    public function ogrGoruntule(Request $request,$danisman_id)
    {
        $id = $request->id;
        $ogrenciler = Student::where('danisman_id',$danisman_id)->get();

        return view('yonetici.danisman-ogr-goruntule',compact('ogrenciler','id'));
    }

    public function login(Request $request)
    {
        $numara = $request->input('adminusername');
        $sifre = $request->input('adminpassw');

        $psswrd = SystemManager::where('yonetici_id', $numara)->value('sifre');


        if ($psswrd == $sifre) {
            return redirect('yoneticiekran/'.$numara);
        } else {
            return redirect()->back()->withErrors('Hatalı kullanıcı adı veya şifre');
            
        }
        
    }

    public function adminpanel(Request $request)
    {
        $id = $request->id;
        $donemler = Term::all();
        return view('yonetici.yoneticiekran',compact('id','donemler'));
    }

    public function donemKaydet(Request $request)
    {
        $donem = $request->input('donem');
        $aktifDonem = Term::where('donem', '=', $donem)->first();
        $aktifDonem->statu = 'y';
        $pasifDonem = Term::where('donem', '!=', $donem)->first();
        $pasifDonem->statu = 'n';
        $pasifDonem->update();
        $aktifDonem->update();

        return redirect()->back();
    }



}