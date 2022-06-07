@extends('ogrenci.base')
@section('main-content')

<div class="container-fluid py-4">
    <div class="row">
    </div>
    <div class="col-lg-14 mb-lg-0 mb-4">
        <br>
        <div class="card">
            <div class="card-body">
                <form action="{{url('projerapor-kaydet') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h5 class="mb-0">Proje Raporu Yükleme</h5>
                    <br>
                    <input type="hidden" name="id" id="id" value="{{$id}}">
                    <div class="row">
                        <br><br>
                        <div class="col-xl-5 col-sm-6 mb-xl-0 mb-4">
                            <div class="col-md-12 mb-3">
                                <div class="col-md-12 mb-3">
                                    <label style="font-size: 16px;">1. PDF</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="FILE" name="pdf1" value="PDF" accept="application/pdf">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label style="font-size: 16px;">2. PDF</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="FILE" name="pdf2" accept="application/pdf">

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label style="font-size: 16px;">3. PDF</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="FILE" name="pdf3" accept="application/pdf">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-sm-6 mb-xl-0 mb-4">
                            <div class="col-md-12 mb-3">
                                <div class="col-md-12 mb-3">
                                    <label style="font-size: 16px;">1. Word</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="FILE" name="word1" accept="application/msword">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label style="font-size: 16px;">2. Word</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="FILE" name="word2" accept="application/msword">

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label style="font-size: 16px;">3. Word</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="FILE" name="word3" accept="application/msword">
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary">Gönder</button>
                            </div>
                        </div>
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
                            <h5 class="mb-0">Proje Raporları</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        PDF'ler
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Word'ler
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Durum
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($raporlar as $item)
                                <tr>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">PDF 1
                                        <p>
                                        <p class="text-xs font-weight-bold mb-0">PDF 2
                                        <p>
                                        <p class="text-xs font-weight-bold mb-0">PDF 3
                                        <p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">WORD 1
                                        <p>
                                        <p class="text-xs font-weight-bold mb-0">WORD 2
                                        <p>
                                        <p class="text-xs font-weight-bold mb-0">WORD 3
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