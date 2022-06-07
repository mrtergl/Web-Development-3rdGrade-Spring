@extends('yonetici.base')
@section('main-content')
   
<main class="main-content">
    <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                    <h6>Öğrenciler</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Adı</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fakülte/Bölüm</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sınıf</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dönem</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Durum</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                            <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ogrenciler as $item)
                            @php
                                $term = \App\Models\Project::where('ogr_no',$item->ogr_no)->value('donem_id');
                                $donem = \App\Models\Term::where('id',$term)->value('donem');
                                $unvan = \App\Models\Teacher::where('danisman_id',$item->danisman_id)->value('unvan');
                                $fak = \App\Models\Faculty::where('id',$item->fakulte_id)->value('fakulte_adi');
                                $bol = \App\Models\Department::where('id',$item->bolum_id)->value('bolum_adi');
                            @endphp
                            <tr>
                            
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/ogrenci/{{$item->fotograf}}" class="avatar avatar-sm me-3">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$item->ad}} {{$item->soyad}}</h6>
                                        <p class="text-xs text-secondary mb-0">{{$item->eposta}}</p>
                                    </div>
                                    </div>
                                </td>
                                <td >
                                    <p class="text-xs text-tertiary mb-0">{{$bol}}</p>
                                    <p class="text-xs text-secondary mb-0">{{$fak}}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    
                                    <p class="text-xs text-tertiary mb-0">{{$item->sinif}}. sınıf</p>
                                    
                                </td>
                                <td class="align-middle text-center">
                                    <span class="badge badge-sm bg-gradient-success">{{$donem}}</span>

                                </td>
                                <td class="align-middle">
                                    @php
                                       $proje = \App\Models\Project::where('ogr_no',$item->ogr_no)->orderBy('id','desc')->first();
                                       $rapor = \App\Models\Report::where('ogr_no',$item->ogr_no)->orderBy('id','desc')->first();
                                       $tez = \App\Models\These::where('ogr_no',$item->ogr_no)->orderBy('id','desc')->first();
                                    @endphp
                                   
                                    @if (\App\Models\Project::where('ogr_no',$item->ogr_no)->exists())
                                        @if (\App\Models\Report::where('ogr_no',$item->ogr_no)->exists())
                                            @if (\App\Models\These::where('ogr_no',$item->ogr_no)->exists())
                                                @if ($tez->durum_id == '3')
                                                    <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                        Tez Önerisi Kabul Edildi</a>
                                                @elseif ($tez->durum_id == '2')
                                                    <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                        Tez Önerisi Red Edildi</a>
                                                @elseif ($tez->durum_id == '1')
                                                    <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                        Tez Sonucu Bekleniyor</a>
                                                @endif
                                            @elseif ($rapor->durum_id == '3')
                                                <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Proje Raporları Kabul Edildi</a>
                                            @elseif($rapor->durum_id == '2')
                                                <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Proje Raporu Red Edildi</a>
                                            @elseif($rapor->durum_id == '1')
                                                <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Proje Rapor Sonucu Bekleniyor</a>
                                        
                                            @endif
                                        @elseif($proje->durum_id=='3')
                                            <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Proje Önerisi Kabul Edildi
                                            </a>
                                        @elseif($proje->durum_id == '2')
                                            <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Proje Önerisi Red Edildi
                                            </a>
                                        @elseif($proje->durum_id=='1')
                                            <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Proje Önerisi Cevabı Bekleniyor
                                            </a>
                                        @endif
                                    @else
                                        <a class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Proje Önerisi Yapılmadı</a>
                                    @endif
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
</main>

@endsection