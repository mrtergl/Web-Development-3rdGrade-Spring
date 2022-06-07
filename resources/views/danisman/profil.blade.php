@extends('danisman.base')
@section('main-content')
@foreach($danisman as $item)
@php
$fakulte = \App\Models\Faculty::where('id',$item->fakulte_id)->value('fakulte_adi');
$bolum = \App\Models\Department::where('id',$item->bolum_id)->value('bolum_adi');
@endphp
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
<div class="main-content position-relative bg-gray-100">
    <div>
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6">
                <div class="row gx-4">
                    <div class="col-auto ">
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1" style="text-align: center">
                                {{$item->unvan}} {{$item->ad}} {{$item->soyad}}
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                {{$item->danisman_id}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">{{ __('Bilgiler') }}</h6>
                </div>
                <div class="card-body pt-4 p-3">

                    <!-- gerçek kodda 200. satır kaydettikten sonra "kaydedildi" mesajının çıkmasını sağlayan kod !-->

                    <form action="{{url('danismanEpostaGüncelle')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Ad-Soyad') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                        <input wire:model="user.name" class="form-control" type="text" value="{{$item->ad }} {{ $item->soyad }}" disabled id="adSoyad">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Fakülte') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                        <input wire:model="user.name" class="form-control" type="text" value="{{ $fakulte }}" disabled id="fakulte">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('E-Posta') }}</label>
                                    <div class="border rounded-3 ">
                                        <input class="form-control" type="text" value="{{ $item->eposta }}" id="eposta" name="eposta">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('Unvan') }}</label>
                                    <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                        <input wire:model="user.email" class="form-control" type="text" value="{{ $item->unvan }}" disabled id="unvan">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('Bölüm') }}</label>
                                    <div class="border rounded-3">
                                        <input class="form-control" type="text" value="{{ $bolum }}" disabled id="bolum">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="hidden" value="{{$item->danisman_id}}" name="danisman_id">
                                    <label class="form-control-label"></label>
                                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" name="danismanEpostaGüncelle">GÜNCELLE</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection