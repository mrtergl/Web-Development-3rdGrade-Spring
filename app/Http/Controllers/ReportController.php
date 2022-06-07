<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\Report;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    function getReport(Request $request)
    {
        $id = $request->id;
        $raporlar = Report::where('ogr_no',$id)->get();
        $raporlar = $raporlar->reverse();
        return view('ogrenci.projeraporu',compact('id','raporlar'));
    }

    public function saveReport(Request $request)
    {
        $rapor = new Report();
        $Did = Student::where('ogr_no',$request->input('id'))->value('danisman_id');
        $term= Term::where('statu','y')->value('id');

        $file = $request->file('pdf1');
        $filename = Str::random(12).'.pdf';
        $file->move('assets/belge/',$filename);
        $rapor->pdf1 = $filename;

        $file = $request->file('pdf2');
        $filename = Str::random(12).'.pdf';
        $file->move('assets/belge/',$filename);
        $rapor->pdf2 = $filename;

        $file = $request->file('pdf3');
        $filename = Str::random(12).'.pdf';
        $file->move('assets/belge/',$filename);
        $rapor->pdf3 = $filename;

        $file = $request->file('word3');
        $filename = Str::random(12).'.doc';
        $file->move('assets/belge/',$filename);
        $rapor->word3 = $filename;

        $file = $request->file('word2');
        $filename = Str::random(12).'.doc';
        $file->move('assets/belge/',$filename);
        $rapor->word2 = $filename;

        $file = $request->file('word1');
        $filename = Str::random(12).'.doc';
        $file->move('assets/belge/',$filename);
        $rapor->word1 = $filename;
        
        $id = $request->input('id');

        $rapor->ogr_no= $id;
        $rapor->donem_id = $term;
        $rapor->danisman_id = $Did;
        $rapor->durum_id = '1';
        $rapor->tarih = date('Y-m-d');
        $rapor->save();
        return redirect('ogrenciekran/'.$request->input('id'))->with('success','Proje Raporları Gönderildi');


    }
}
