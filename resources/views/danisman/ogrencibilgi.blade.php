<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Danışman
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1" rel="stylesheet" />
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
<body class="g-sidenav-show bg-gray-100">
    <div class="main-content position-relative bg-gray-100">
        <div>
            <div class="container-fluid">
                <div class="page-header min-height-300 border-radius-xl mt-4"
                    style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                    <span class="mask bg-gradient-primary opacity-6"></span>
                </div>
                <div class="card card-body blur shadow-blur mx-4 mt-n6">
                    <div class="row gx-4">
                        <div class="col-auto ">
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1" style="text-align: center">
                                    {{ __('Alec Thompson') }}
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                   Öğrenci
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

                        <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Ad</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
    
                                <div class="col-md-5 mb-3">
                                    <label for="">Soyad</label>
                                    <input type="text" class="form-control" name="soyad">
                                </div>
    
                                <div class="col-md-6 mb-3">
                                    <label for="">Öğrenci No</label>
                                    <input type="number" name="ogrno" class="form-control">
                                </div>
    
                                <div class="col-md-6 mb-3">
                                    <label for="">Fakülte</label>
                                    <input name="fakulte" class="form-control">
                                </div>
    
                                <div class="col-md-6 mb-3">
                                    <label for="">Bölüm</label>
                                    <input type="text" name="bolum" class="form-control">
                                </div>
    
                                <div class="col-md-6 mb-3">
                                    <label for="">Sınıf</label>
                                    <input type="number" name="sinif" class="form-control">
                                </div>
    
                                <div class="col-md-6 mb-3">
                                    <label for="">Telefon Numarası</label>
                                    <input type="number" name="tel_No" class="form-control">
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>