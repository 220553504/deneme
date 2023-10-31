@extends('admin.tema')
@section('title')Yönetim Paneli Modülekleme Sayfası @endsection
@section('css')

@endsection

@section('orta')
<div class="content-body">
<div class="container-fluid mt-3">

    <div class="col-lg-8">
        @if(session('basari'))
        <div class="alert alert-success">{{session('basari')}}</div>
        @endif
        @if(session('hata'))
        <div class="alert alert-danger">{{session('hata')}}</div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Modül Ekleme Ekranı</h4>
                <p class="text-muted">Eklemek Istediginiz <code>Modülü</code> Yazınız</p>
                <div class="basic-form">
                    <form class="form-inline" action="{{route('moduleklepost')}}" method="POST">
                        @csrf
                        <div class="form-group mx-sm-3 mb-2">
                            <label class="sr-only">Modül</label>
                            <input type="text" class="form-control" name="baslik" placeholder="Modül Ismi Yazınız">
                        </div>
                        <button type="submit" class="btn btn-dark mb-2">Modül Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>     
</div>
@endsection

@section('js')

@endsection