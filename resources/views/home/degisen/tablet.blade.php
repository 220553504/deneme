@extends('index')

@section("home")
<div id="urunler">

  @if($urunler)
  @foreach ($urunler as $urun)
  <div class="card" id="kutu1">
   <img src="{{asset("house")}}/images/home/{{$urun->resim}}" class="card-img-top" width="100%" height="100%">
   <div class="card-body">
     <p class="card-text" style="margin: -5px 0 0 0;">
       {{$urun->baslik}}</p>
     <p class="card-text" style="margin: 5px 0 0 0; font-size:14px; color:#3bd806"><span style="color:#000;">Fiyat:</span> {{$urun->description}} TL</p>
     @if (Auth::check())
 <a href="{{Route("sepete-ekle",[Auth::user()->name,$urun->resim,$urun->baslik,$urun->description])}}" class="btn btn-warning-custom" id="urunbuton">Sepete Ekle</a>
@else
<a href="" class="btn btn-warning-custom" id="urunbuton">Sepete Ekle</a> 
@endif
   </div>
 </div>     
  @endforeach
  @endif

   

 </div>


  @endsection