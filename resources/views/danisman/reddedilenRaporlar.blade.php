@extends('danisman.base')
@section('main-content')
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/danismanekrani">
            <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="...">
            <span class="ms-1 font-weight-bold">Danışman Hoca</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class=" navbar w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}" href="/profil/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="customer-support" transform="translate(1.000000, 0.000000)">
                                            <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" id="Path" opacity="0.59858631"></path>
                                            <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z" id="Path"></path>
                                            <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z" id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}" href="/ogrenciListesi/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="customer-support" transform="translate(1.000000, 0.000000)">
                                            <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" id="Path" opacity="0.59858631"></path>
                                            <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z" id="Path"></path>
                                            <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z" id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Öğrenciler</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="/gelenProjeler/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Onay Bekleyen Projeler</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="/gelenRaporlar/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Onay Bekleyen Raporlar</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="/gelenTezler/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Onay Bekleyen Tezler</span>
                </a>
            </li>

            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="/onaylananProjeler/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Onaylanan Projeler</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="/onaylananRaporlar/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Onaylanan Raporlar</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="/onaylananTezler/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Onaylanan Tezler</span>
                </a>
            </li>

            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="/reddedilenProjeler/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Reddedilen Projeler</span>
                </a>
            </li>

            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="/reddedilenRaporlar/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Reddedilen Raporlar</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="/reddedilenTezler/{{$id}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Reddedilen Tezler</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a href="/"><button type="button" class="btn btn-primary" style="margin-left: 60px;">Çıkış Yap</button></a>
            </li>
        </ul>

    </div>
</aside>
<div class=" main-content position-relative py-4">
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>REDDEDİLEN RAPORLAR</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ad Soyad</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Öğrenci No</th>
                                            <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fakülte</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bölüm</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sınıf</th> -->
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PDF</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">WORD</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dönem</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tarih</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Durum</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($raporlar as $item)
                                        @php
                                        $ogrAd = \App\Models\Student::where('ogr_no',$item->ogr_no)->value('ad');
                                        $ogrSoyad = \App\Models\Student::where('ogr_no',$item->ogr_no)->value('soyad');
                                        $donem = \App\Models\Term::where('id',$item->donem_id)->value('donem');
                                        $ogrEposta = \App\Models\Student::where('ogr_no',$item->ogr_no)->value('eposta');
                                        $raporDurum=\App\Models\State::where('id',$item->durum_id)->value('durum');
                                        $fotograf=\App\Models\Student::where('id',$item->ogr_no)->value('fotograf');
                                        @endphp
                                        <tr>
                                            @if($item->durum_id==2)
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/assets/ogrenci/{{ $fotograf}}" class="avatar avatar-sm me-3">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{$ogrAd}} {{$ogrSoyad}} </h6>
                                                        <p class="text-xs text-secondary mb-0">{{$ogrEposta}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$item->ogr_no}} </p>
                                            </td>
                                            <td>
                                                <a href="../assets/belge/{{$item->pdf1}}" download="{{$item->pdf1}}">{{$item->ogr_no}}.pdf</a> </br>
                                                <a href="../assets/belge/{{$item->pdf2}}" download="{{$item->pdf2}}">{{$item->ogr_no}}.pdf</a> </br>
                                                <a href="../assets/belge/{{$item->pdf3}}" download="{{$item->pdf3}}">{{$item->ogr_no}}.pdf</a>
                                            </td>
                                            <td>
                                                <a href="../assets/belge/{{$item->word1}}" download="{{$item->word1}}">{{$item->ogr_no}}.word</a> </br>
                                                <a href="../assets/belge/{{$item->word2}}" download="{{$item->word2}}">{{$item->ogr_no}}.word</a> </br>
                                                <a href="../assets/belge/{{$item->word3}}" download="{{$item->word3}}">{{$item->ogr_no}}.word</a>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$donem}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$item->tarih}}</p>
                                            </td>

                                            <td class="align-middle">
                                                <p class="text-xs font-weight-bold mb-0"> {{$raporDurum}}</p>
                                            </td>
                                            <td class="d-flex justify-content">
                                                @if($item->durum_id==1)
                                                <form action="{{url('raporOnay') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" class="btn bg-gradient-dark btn-md mt-4 mb-4" value="{{$item->id}}" name="id"></input>
                                                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" name="raporOnay">ONAYLA</button>
                                                </form>
                                                <form action="{{url('raporRed') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" class="btn bg-gradient-dark btn-md mt-4 mb-4" value="{{$item->id}}" name="id"></input>
                                                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" name="raporRed">REDDET</button>
                                                </form>
                                                @endif
                                            </td>
                                            @endif
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
    </div>
</div>
@endsection
<script>
    function popup(link) {

        // open the page as popup //
        var myWindow = window.open(link, "_blank", "scrollbars=yes,width=800,height=500,top=1000");

        // focus on the popup //
        myWindow.focus();
    }
</script>