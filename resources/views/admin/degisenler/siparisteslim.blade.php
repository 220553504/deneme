@extends('admin.tema')
@section('title')Yönetim Paneli Siparis Sayfası @endsection
@section('css')
<link href="{{asset('yonetim')}}/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('orta')
<div class="content-body">
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-12">
        @if(session("basari"))
        <div class="alert alert-success">{{session("basari")}}</div>
        @endif
        @if(session("hata"))
        <div class="alert alert-danger">{{session("hata")}}</div>
        @endif
        
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Teslim Edilecek Siparisler</h4>
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
                                
                                    @if($siparisler)
                                    @foreach($siparisler as $siparis)
                                    <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$siparis->urunadi}}</td>
                                    <td>{{$siparis->urunfiyat}}</td>
                                    <td>{{$siparis->created_at}}</td>
                                    <td>{{$siparis->name}}</td>
                                    <td>
                                    <a href="{{Route("siparissil",[$siparis->name,$siparis->id])}}" class="btn btn-warning">Teslim Edildi</a>
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