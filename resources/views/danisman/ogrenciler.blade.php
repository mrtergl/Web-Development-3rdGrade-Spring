@extends('danisman.base')
@section('main-content')
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
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Danışman Hocası</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dönemi</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bilgiler</th>
                    
                        <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                            <div>
                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">John Michael</h6>
                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                            <p class="text-xs text-secondary mb-0">Organization</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">Online</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <a href onclick="popup('/ogrencibilgileri')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Göster
                            </a>
                        </td>
                        <td class="align-middle">
                            <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Proje Durumu
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                            <div>
                                <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">Programator</p>
                            <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <a  href ="" onclick="popup('/ogrencibilgileri')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Göster
                            </a>
                        </td>
                        <td class="align-middle">
                            <a href="javascript:;" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Proje Durumu
                            </a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
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