@extends('index')

@section("home")
<div id="urunler">
    <div style="width:90%; height:40px; border:1px solid #d7d1d1; font-size:20px; color:#837e7e; padding:0 0 0 10%; margin:0 0 0 25px; line-height:35px; border-radius:5px 5px 5px 5px;">Kayıt Ol</div>
    <div style="width:90%; height:245px; border:1px solid #d7d1d1; margin:10px 0 0 25px; border-radius:5px 5px 5px 5px;">
<div style="width:80%; height:250px; border:0px solid #000; margin:20px auto;">
    <form action="{{Route("kayitpost")}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Kullanıcı Adı</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kullanıcı Adı Yazınız">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Şifre</label>
          <input type="password" class="form-control" name="sifre" id="exampleInputPassword1" placeholder="Şifre Yazınız">
        </div>
        
        <button type="submit" class="btn btn-primary" style="width:70%; margin:20px 0 0 14%;">Kayıt Ol</button>
      </form>
</div>
    
    </div>
  </div>

  @endsection