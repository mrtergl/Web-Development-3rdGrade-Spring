@extends('ogrenci.base')
@section('main-content')

<div class="container-fluid py-4">
    <div class="row">
    </div>
    <div class="col-lg-14 mb-lg-0 mb-4">
      <br>
      <div class="card">
        <div class="card-body">
          <form action="{{url('tezrapor-kaydet') }}" method="POST"  enctype="multipart/form-data">
              @csrf
              
                  
                 
                  <div class="col-md-12 mb-3">
                  <h5 class="mb-0">Tez Belgesi Yükleme</h5>
                      <br>
                      <input type="hidden" name="id" id="id" value="{{$id}}">
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tez Belgesi Word
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="FILE" name="word" accept="application/msword">

                        </th>
                        <br>
                        <br>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tez Belgesi PDF
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="FILE" name="pdf" value="PDF" accept="application/pdf">
                        </th>
                  </div>
                  <br>
                  <div class="col-md-6 mb-3">
                     <button type="submit" class="btn btn-primary">Gönder</button>
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
                            <h5 class="mb-0">Tez Önerileri</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Pdf
                                    </th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        word
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Durum
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($tezler as $item)
                                <tr>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">PDF
                                        <p>
                                       
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">WORD
                                        <p>
                                        
                                    </td>

                                    <td class="text-center">
                                        @if ($item->durum_id=='2')
                                        <p class="text-xs font-weight-bold mb-0">Red Edildi</p>
                                        @elseif ($item->durum_id=='3')
                                        <span class="badge badge-sm bg-gradient-success">Kabul Edildi<span>
                                        @elseif ($item->durum_id=='1')
                                        <p class="text-xs font-weight-bold mb-0">Onay Bekliyor</p>
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
@endsection
