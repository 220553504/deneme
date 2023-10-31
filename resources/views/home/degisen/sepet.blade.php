@extends('index')

@section("home")
<div id="urunler">
<div id="sepetim">

<div id="sepetdiv1">
<span id="sepetyazi1">Sepetim ()</span>
</div>

<div id="sepetdiv2">
<div id="sepetmenu1">Sıra</div> 
<div id="sepetmenu2">Ürün Resim</div>
<div id="sepetmenu3">Ürün Adı</div>
<div id="sepetmenu4">Ürün Fiyatı</div>
<div id="sepetmenu5">İşlem</div>
</div>

</div>

<div id="sepetdiv3">
@php
$toplamFiyat = 0;
@endphp

@if($kontrol)
    @foreach ($kontrol as $urun)
        <div id="urunid">{{ $loop->iteration }}</div>
        <div id="urunresim"><img src="{{ asset("house") }}/images/home/{{ $urun->urunresim }}" width="100%" height="100%"></div>
        <div id="urunadi">{{ $urun->urunadi }}</div>
        <div id="urunfiyat">{{ $urun->urunfiyat }}</div>
        <div id="urunislem">
            <a href="{{Route("silmek",[$urun->name,$urun->id])}}" class="btn btn-danger" style="background: rgb(240, 44, 44);"><i class="fas fa-trash-alt"></i> Sil</a>
        </div>
        
        @php
            $toplamFiyat += $urun->urunfiyat;
        @endphp
    @endforeach
@endif

<div id="satinalmaform">
  @if(session("basari"))
  <div class="alert alert-success">{{session("basari")}}</div>
  @endif
  @if(session("hata"))
  <div class="alert alert-danger">{{session("hata")}}</div>
  @endif
    <div style="width:80%; height:340px; border:0px solid #000; margin:40px auto;">
        <form action="{{Route("payment")}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Kradi Kartı Numarası</label>
              <input type="text" class="form-control" name="kartno" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kredi Karı Numarası Yazınız">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Kart Son Kullanma Tarihi</label>
              <input type="text" class="form-control" name="sontarih" id="exampleInputPassword1" placeholder="Kartınızın Son Kullanma Tarihini Yazınız">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kart CVC Numarası</label>
                <input type="text" class="form-control" name="cvc" id="exampleInputPassword1" placeholder="Kartınızın CVC Numarasını Yazınız">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Toplam Tutar</label>
                <input type="text" class="form-control" name="toplamtutar" id="exampleInputPassword1" value="{{$toplamFiyat}}" readonly>
              </div>
            
              <input type="submit" class="btn btn-warning-custom" style="width:70%; margin:20px 0 0 14%; background-color: #FFA500; border-color: #FFA500; color: #fff;" value="Odeme Yap ({{ number_format($toplamFiyat, 0) }} TL)"></input>
          </form>
    </div>
</div>



</div>

<div id="satinalma">
  <div id="satinalma1">Toplam Fiyat<br><span style="color:#3bd806">{{ number_format($toplamFiyat, 0) }} TL</span></div>
  <div id="satinalma2">Premium ile bu alışverişinden Hepsipara kazan.<br>
      <input type="button" class="btn btn-warning btn-sm" value="Simdi Gec">
  </div>

  <div id="satinalma3">
      <input type="submit" class="btn btn-warning-custom" id="urunbuton2" value="Alışverişi Tamamla">
  </div>

</div>

</div>





  @endsection