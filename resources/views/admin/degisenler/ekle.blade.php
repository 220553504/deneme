@extends('admin.tema')
@section('title')Yönetim Paneli Ekle Sayfası @endsection
@section('css')
<link href="{{asset('yonetim')}}/plugins/summernote/dist/summernote.css" rel="stylesheet">
@endsection

@section('orta')
<div class="content-body">
<div class="container-fluid mt-3">

    <div class="col-lg-10">

        @if(session('basari'))
        <div class="alert alert-success">{{session('basari')}}</div>
        @endif
        
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{$kontrol->baslik}} Ekleme Sayfası</h4>
                </p>
                <div class="basic-form">
                    <form action="{{route('eklepost',$kontrol->seflink)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <label>Kategori Alanı</label>
                        <div class="form-group">
                            <select name="kategori" class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                                @if($kontrol)
                                <option value="{{$kontrol->id}}">{{$kontrol->seflink}}</option>
                                @endif
                                
                            </select>
                        </div>

                        <label>Ürün Başlık Alanı</label>
                        <div class="form-group">
                            <input name="baslik" class="form-control" type="text" placeholder="Başlık Yazınız">
                        </div>

                        
                        <label>Özel Açıklama Alanı</label>
                        <div class="form-group">
                        <textarea name="metin" style="width:98%; height:300px;" class="summernote"></textarea>
                        </div>

                        <label>Anahtar Kelime</label>
                        <div class="form-group">
                            <input name="anahtar" class="form-control" type="text" placeholder="Anahtar Kelime Yazınız">
                        </div>
                            
                        <label>Ürün Fiyat</label>
                        <div class="form-group">
                            <input name="description" class="form-control" type="text" placeholder="Açıklama Yazınız">
                        </div>

                        <label>Resim Alanı</label>
                        <div class="form-group">
                            <input name="resim" class="form-control" type="file">
                        </div>
                        
                        <label>Sıra No</label>
                        <div class="form-group">
                            <input style="width:200px;" name="sirano" class="form-control" type="number" placeholder="Sıra No">
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Kaydet">
                        </div>
                       

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>     
</div>

@endsection

@section('js')
<script src="{{asset('yonetim')}}/plugins/summernote/dist/summernote.min.js"></script>
<script src="{{asset('yonetim')}}/plugins/summernote/dist/summernote-init.js"></script>
@endsection