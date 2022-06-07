@extends('ogrenci.base')
@section('main-content')

  <div class="container-fluid py-4">
    <div class="row">
    </div>
    <div class="col-lg-14 mb-lg-0 mb-4">
      <br>
      <div class="card">
        <div class="card-body">
          <form action="{{url('projeoneri-kaydet') }}" method="POST"  enctype="multipart/form-data">
              @csrf
              <div class="row">
                  <div class="col-md-8 mb-3">
                      <label for="">Proje Konusu</label>
                      <input type="text" class="form-control" name="projekonu" required>
                      <br>
                      
                  </div>
                  
                 
                  <div class="col-md-12 mb-3">
                      <label for="">Projenin Amacı</label>
                      <textarea name="projeamac" id="projeamac"  class = "form-control" cols="30" rows="10" ></textarea>
                      <br>
                  </div>
                  <div class="col-md-3 mb-3">
                      <label for="">Proje ile igili 5 Anahtar Kelime Girin :</label>
                      <input type="text" name="anahatarkelime1" class="form-control" placeholder="1. Kelime" required>
                      <br>
                      <input type="text" name="anahatarkelime2" class="form-control" placeholder="2. Kelime" required>
                      <br>
                      <input type="hidden" value="{{$id}}" name="id">
                      <input type="text" name="anahatarkelime3" class="form-control" placeholder="3. Kelime" required>
                      <br>
                      <input type="text" name="anahatarkelime4" class="form-control" placeholder="4. Kelime" required>
                      <br>
                      <input type="text" name="anahatarkelime5" class="form-control" placeholder="5. Kelime" required>
                  </div>

                  <div class="col-md-9 mb-3">
                    <label for="">Projenin Materyal, Yönetim ve Araştırma Olanakları</label>
                    <textarea name="projearastirma" id="projearastirma"  class = "form-control" cols="30" rows="15"></textarea>
                  </div>

                  <div class="col-md-6 mb-3">
                      <button type="submit" class="btn btn-primary" onclick="return ProjeAmac()">Gönder</button>
                  </div>
              </div>
          </form>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Proje Önerileri</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Proje Başlığı
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Durum
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Yorum
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projeler as $item)
                                    <tr>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$item->baslik}}<p>
                                        <td class="text-center">
                                            @if ($item->durum_id=='1')
                                                <p class="text-xs font-weight-bold mb-0">Onay Bekleniyor</p>
                                            @elseif ($item->durum_id=='3')
                                                <span class="badge badge-sm bg-gradient-success">Kabul Edildi<span>
                                            @elseif ($item->durum_id=='2')
                                                <p class="text-xs font-weight-bold mb-0">Red Edildi</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$item->yorum}}<p>
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
@endsection

<script type="text/javascript">
  function ProjeAmac(){
      s = document.getElementById("projeamac").value;
      s = s.replace(/(^\s*)|(\s*$)/gi,"");
      s = s.replace(/[ ]{2,}/gi," ");
      s = s.replace(/\n /,"\n");
      if (s.split(' ').length <= 198) {
          alert("Proje amacı 300 kelimeden az.Kelime Sayısı"+s.split(' ').length);
          return false;
      }
      x = document.getElementById("projearastirma").value;
      x = x.replace(/(^\s*)|(\s*$)/gi,"");
      x = x.replace(/[ ]{2,}/gi," ");
      x = x.replace(/\n /,"\n");
      if (x.split(' ').length <= 298) {
          alert("Proje Materyal ve Araştırma olanakları 300 kelimeden az.\nKelime Sayısı: "+x.split(' ').length);
          return false;
      }

}
</script>






