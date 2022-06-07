@extends('baselogin'):
<nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 ">
            Kocaeli Üniversitesi Danışman Girişi
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark me-2 text-dark">


                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark me-2">


                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">

            </ul>
        </div>
    </div>
</nav>
@section('content')
<div class="page-header section-height-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card card-plain mt-8">
                    <div class="card-header pb-0 text-left bg-transparent">
                        <h3 class="font-weight-bolder text-info text-gradient">Danışman Girişi</h3>
                        <p class="mb-0">İlk defa giriş yapıyorsanız mailinize gelen şifre ile giriş yapın</p>
                    </div>
                    <div class="card-body">
                        <form role="form text-left" action="{{url('adminLogin') }}" method="POST">
                            @csrf
                            <label>Danışman ID</label>
                            <div class="mb-3">
                                <input name="id" type="number" class="form-control" placeholder="danışman id" aria-label="Danışman Id" aria-describedby="email-addon">
                            </div>
                            <label>Şifre</label>
                            <div class="mb-3">
                                <input name="password" type="password" class="form-control" placeholder="Şifre" aria-label="Password" aria-describedby="password-addon">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                <label class="form-check-label" for="rememberMe">Beni Hatırla</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="danismanGiris">Giriş Yap</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n3">
                    <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection