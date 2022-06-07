<?php

namespace App\Http\Controllers;
use App\Models\Term;
use App\Models\Report;
use App\Models\These;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class TheseController extends Controller
{
    function getThese(Request $request)
    {
        $id = $request->id;
        $tezler = These::where('ogr_no',$id)->get();
        $tezler = $tezler->reverse();
        return view('ogrenci.tezraporu',compact('id','tezler'));
    }

     public function saveThese(Request $request)
     {
        $tez = new These();
        $Did = Student::where('ogr_no',$request->input('id'))->value('danisman_id');
        $term= Term::where('statu','y')->value('id');

        $file = $request->file('pdf');
        $filename = Str::random(12).'.pdf';
        $file->move('assets/belge/',$filename);
        $tez->pdf= $filename;

         $file = $request->file('word');
         $filename = Str::random(12).'.docx';
         $file->move('assets/belge/',$filename);
         $tez->word = $filename;
        
        $id = $request->input('id');

        $tez->ogr_no= $id;
        $tez->donem_id = $term;
        $tez->danisman_id = $Did;
        $tez->durum_id = '1';
        $tez->tarih = date('Y-m-d');
        $tez->save();
        return redirect('ogrenciekran/'.$request->input('id'))->with('success','Tez Önerisi Yapıldı');


     }
}
