<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Report;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Term;
use App\Models\These;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class TeacherController extends Controller
{
    public function login(Request $req)
    {
        $id = $req->id;
        $sifre = $req->password;
        $cryptedPass = base64_encode($sifre);
        $danisman = Teacher::where('danisman_id', $id)->value('sifre');

        echo "$danisman";

        if ($danisman != null) {
            if ($cryptedPass == $danisman) {
                return redirect('profil/' . $id);
            }
        }
        return redirect('/danismangiris');
    }

    public function danismanPanel(Request $request)
    {
        $id = $request->id;
        $danisman = Teacher::where('danisman_id', $request->id)->get();
        return view('danisman.profil', compact('danisman', 'id'));
    }
    public function epostaGüncelle(Request $request)
    {
        $id = $request->danisman_id;
        $danisman = Teacher::where("danisman_id", $request->danisman_id)->first();
        $danisman->eposta = $request->input('eposta');
        $danisman->update();

        return redirect('profil/' . $id);
    }


    public function ogrenciler(Request $req)
    {
        $id = $req->id;
        $ogrenciler = Student::where('danisman_id', '=', $id)->get();
        return view('danisman.ogrenciListesi', compact('ogrenciler', 'id'));
    }

    public function tezler(Request $req)
    {
        $id = $req->id;
        $tezler = These::where('danisman_id', '=', $id)->orderBy('tarih', 'DESC')->get();
        $routeName = Route::currentRouteName();
        if ($routeName == 'onaylananTezler') {
            return view('danisman.onaylananTezler', compact('tezler', 'id'));
        } elseif ($routeName == 'gelenTezler') {
            return view('danisman.gelenTezler', compact('tezler', 'id'));
        } elseif ($routeName == 'reddedilenTezler') {
            return view('danisman.reddedilenTezler', compact('tezler', 'id'));
        }
    }


    public function raporlar(Request $req)
    {
        $id = $req->id;
        $raporlar = Report::where('danisman_id', '=', $id)->orderBy('tarih', 'DESC')->get();
        $routeName = Route::currentRouteName();
        if ($routeName == 'onaylananRaporlar') {
            return view('danisman.onaylananRaporlar', compact('raporlar', 'id'));
        } elseif ($routeName == 'gelenRaporlar') {
            return view('danisman.gelenRaporlar', compact('raporlar', 'id'));
        } elseif ($routeName == 'reddedilenRaporlar') {
            return view('danisman.reddedilenRaporlar', compact('raporlar', 'id'));
        }
    }
    public function projeler(Request $req)
    {
        $id = $req->id;
        $projeler = Project::where('danisman_id', '=', $id)->orderBy('tarih', 'DESC')->get();
        $routeName = Route::currentRouteName();
        if ($routeName == 'onaylananProjeler') {
            return view('danisman.onaylananProjeler', compact('projeler', 'id'));
        } elseif ($routeName == 'gelenProjeler') {
            return view('danisman.gelenProjeler', compact('projeler', 'id'));
        } elseif ($routeName == 'reddedilenProjeler') {
            return view('danisman.reddedilenProjeler', compact('projeler', 'id'));
        }
    }

    public function projeOnayla(Request $req)
    {
        $id = $req->danisman_id;
        $ogrenciProje = Project::find($req->id);
        $ogrenciProje->durum_id = '3';
        $ogrenciProje->save();

        return redirect('gelenProjeler/' . $id);
    }


    public function projeReddet(Request $req)
    {
        $id = $req->danisman_id;
        $ogrenciProje = Project::find($req->id);
        $ogrenciProje->durum_id = '2';
        $ogrenciProje->save();

        return redirect('gelenProjeler/' . $id);
    }

    public function tezOnayla(Request $req)
    {
        $id = $req->danisman_id;
        $ogrenciProje = These::find($req->id);
        $ogrenciProje->durum_id = '3';
        $ogrenciProje->save();

        return redirect('gelenTezler/' . $id);
    }

    public function tezReddet(Request $req)
    {
        $id = $req->danisman_id;
        $ogrenciProje = These::find($req->id);
        $ogrenciProje->durum_id = '2';
        $ogrenciProje->save();

        return redirect('gelenTezler/' . $id);
    }

    public function raporOnayla(Request $req)
    {
        $id = $req->danisman_id;
        $ogrenciProje = Report::find($req->id);
        $ogrenciProje->durum_id = '3';
        $ogrenciProje->save();

        return redirect('gelenRaporlar/' . $id);
    }

    public function raporReddet(Request $req)
    {
        $id = $req->danisman_id;
        $ogrenciProje = Report::find($req->id);
        $ogrenciProje->durum_id = '2';
        $ogrenciProje->save();

        return redirect('gelenRaporlar/' . $id);
    }

    public function danismanKontrol(Request $req)
    {
        $eposta = $req->eposta;
        $sifre = $req->password;
        $cryptedPass = base64_encode($sifre);
        $danisman = Teacher::where('eposta', '=', $eposta)->first();

        echo "$danisman";

        if ($danisman != null) {
            if ($cryptedPass == $danisman->sifre) {
                return view('danisman.profil', compact('danisman'));
            }
        }
        return redirect('/danismangiris');
    }

    public function projeYorumKaydet(Request $req)
    {
        $id = $req->danisman_id;
        $ogrenciProje = Project::find($req->id);
        $ogrenciProje->yorum = $req->danismanYorum;
        $ogrenciProje->save();

        return redirect('gelenProjeler/' . $id);
    }
}
