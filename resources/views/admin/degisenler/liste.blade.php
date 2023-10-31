@extends('admin.tema')
@section('title')Yönetim Paneli Liste Sayfası @endsection
@section('css')
<link href="{{asset('yonetim')}}/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('orta')
<div class="content-body">
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$kontrol->baslik}} Liste Sayfası</h4>
                    <div style="margin:-30px 0 0 90%;">
                    <a href="{{route('ekle',$kontrol->seflink)}}" class="btn btn-success" style="color:#fff;"><i class="fa fa-plus"></i>Yeni Ekle</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>SIRA</th>
                                    <th>Ürün BAŞLIK</th>
                                    <th>Fiyat</th>
                                    <th>TARİH</th>
                                    <th>DURUM</th>
                                    <th>İŞLEMLER</th>
                                </tr>
                            </thead>

                            <tbody>
                                
                                    @if($veriler)
                                    @foreach($veriler as $veri)
                                    <tr>
                                    <td>{{$veri->id}}</td>
                                    <td>{{$veri->baslik}}</td>
                                    <td>{{$veri->description}}</td>
                                    <td>{{$veri->created_at}}</td>
                                    <td>
                                    @if($veri->durum==1)
                                    <a href="{{route('durum',[$kontrol->seflink,$veri->id])}}" class="badge badge-success" style="color:#fff">AKTİF</a>
                                    @else
                                    <a href="{{route('durum',[$kontrol->seflink,$veri->id])}}" class="badge badge-danger">PASİF</a>                                                                        
                                    @endif

                                    </td>
                                    <td>
                                    <a href="{{route('duzenle',[$kontrol->seflink,$veri->id])}}" class="btn btn-primary">Düzenle</a> 
                                    <a href="{{route('sil',[$kontrol->seflink,$veri->id])}}" class="btn btn-danger">Sil</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                    
                                    @endif
                                    
                                </tr>

                            <tfoot>
                                <tr>
                                    <th>SIRA</th>
                                    <th>BAŞLIK</th>
                                    <th>AÇIKLAMA</th>
                                    <th>TARİH</th>
                                    <th>DURUM</th>
                                    <th>İŞLEMLER</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>     
</div>
@endsection

@section('js')
<script src="{{asset('yonetim')}}/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('yonetim')}}/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('yonetim')}}/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

@endsection