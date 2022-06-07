<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\System;
use App\Models\Project;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\System_Manager;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    function getStudent(Request $request)
    { 
        $id = $request->id;
        $students = Student::where('ogr_no',$id)->get();
        $sifre = System::where('kullanici_no',$id)->value('sifre');
        return view('ogrenci.ekran' ,
        ['students' => $students,
        'sifre' => $sifre,
        'id' => $id])->with('success','ıtem create');
    }

    public function getProject(Request $request)
    {
        $konu = Project::where('ogr_no', '!=' ,$request->input('id'))->get('baslik');
        $amac = Project::where('ogr_no', '!=' ,$request->input('id'))->get('amac');
        $yontem = Project::where('ogr_no', '!=' ,$request->input('id'))->get('yontem');

        $proje = new Project();
        $Did = Student::where('ogr_no',$request->input('id'))->value('danisman_id');
        $term= Term::where('statu','y')->value('id');

        $proje->baslik = $request->input('projekonu');
        $proje->amac = $request->input('projeamac');
        $proje->kelime1 = $request->input('anahatarkelime1');
        $proje->kelime2 = $request->input('anahatarkelime2');
        $proje->kelime3 = $request->input('anahatarkelime3');
        $proje->kelime4 = $request->input('anahatarkelime4');
        $proje->kelime5 = $request->input('anahatarkelime5');
        $proje->yontem = $request->input('projearastirma');
        $proje->donem_id = $term;
        $proje->ogr_no = $request->input('id');
        $proje->danisman_id = $Did;
        $proje->durum_id = 1;
        $proje->tarih = date('Y-m-d');
        
        similar_text($request->input('projekonu'), $konu, $konuper); 
        similar_text($request->input('projeamac'), $amac, $amacper); 
        similar_text($request->input('projearastirma'), $yontem, $yontemper); 
        $total = ($konuper+$amacper+$yontemper)/3;
        if ($total > 30)
        {
            return redirect('projeonerisi/'.$request->input('id'))->with('warning',"Proje Önerileriyle benzerlik oranı: ".$total."Lütfen başka bir öneri yapın.");
        }
        //$proje->save();
        return redirect('ogrenciekran/'.$request->input('id'))->with('success','Proje Önerisi Yapıldı');

    }

    public function setUpdate(Request $request){

        $insert = Student::find($request->ogr_no);
        $insert->telefon = $request->telefon;
        $insert->eposta = $request->eposta;
        $insert->update();

        if(!empty($request->sifre)) {
            $sifre = base64_encode($request->sifre);
            $system = System::where("kullanici_no", $request->ogr_no)->first();
            if(!empty($system)) {
                $system->sifre = $sifre;
                $system->save();
            }
        }

        if($request->hasFile('fotograf'))
        {
            $path = 'assets/uploads/ogrenci/'.$insert->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('fotograf');
        $filename = $request->ogr_no.'.jpg';
        $file->move('assets/uploads/ogrenci',$filename);
        $insert->fotograf = $filename;
        }
        return redirect()->back()->with('success','Profil Güncellendi');
    }

    public function getUpdate(Request $request)
    {
        $id = $request->id;
        $getUpdate = Student::find($id);
            return view('ogrenci.profil' ,
       ['guncelle' =>  $getUpdate],
       ['ogr_no' =>  $id]);
       
        
    }

    public function ProjectPage(Request $request)
    {
        $id = $request->id;
        $projeler = Project::where('ogr_no',$id)->get();
        $projeler = $projeler->reverse();
        return view('ogrenci.projeonerisi', compact('id','projeler'));
    }

    public function getTeacher(Request $request)
    {
        $id = $request->id;
        $danid = Student::where('ogr_no',$id)->value('danisman_id');
        $bilgi = Teacher::where('danisman_id', $danid)->get();

        return view('ogrenci.danismanbilgi', compact('bilgi','id'));
    }

    public function login(Request $request)
    {
        $numara = $request->input('numara');
        $sifre = $request->input('sifre');
        
        $psswrd = System::where('kullanici_no', $numara)->value('sifre');
        $psswrd = base64_decode($psswrd);
        

        if ($psswrd == $sifre) {
            return redirect('ogrenciekran/'.$numara);
        } else {
            return redirect()->back()->with('error','Hatalı Öğrenci Numarası veya Şifre');;
            
        }
    }

}
