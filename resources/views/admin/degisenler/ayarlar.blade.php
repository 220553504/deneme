@extends('admin.tema')
@section('title')Yönetim Paneli Ayarlar Sayfası @endsection
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
                <h4 class="card-title">Ayarlar Sayfası</h4>
                </p>
                <div class="basic-form">
                    <form action="{{route('ayarlarpost')}}" method="POST">
                        @csrf

                        <label>Başlık Alanı</label>
                        <div class="form-group">
                            <input name="baslik" class="form-control" type="text" placeholder="Başlık Yazınız" value="{{$kontrol->baslik}}">
                        </div>

                        <label>Anahtar Kelime</label>
                        <div class="form-group">
                            <input name="anahtar" class="form-control" type="text" placeholder="Anahtar Kelime Yazınız" value="{{$kontrol->anahtar}}">
                        </div>
                            
                        <label>Açıklama Alanı</label>
                        <div class="form-group">
                            <input name="description" class="form-control" type="text" placeholder="Açıklama Yazınız" value="{{$kontrol->description}}">
                        </div>

                        <label>Telefon No</label>
                        <div class="form-group">
                            <input name="telefon" class="form-control" type="text" placeholder="Başlık Yazınız" value="{{$kontrol->telefon}}">
                        </div>

                        <label>Mail</label>
                        <div class="form-group">
                            <input name="mail" class="form-control" type="text" placeholder="Başlık Yazınız" value="{{$kontrol->mail}}">
                        </div>
                        
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Güncelle">
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