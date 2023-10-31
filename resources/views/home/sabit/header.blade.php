<header>
    <a href="{{Route("house")}}">
        <div id="logo">
            <img src="{{asset("house")}}/images/2.jpg" width="100%" height="100%">
        </div>
    </a> 
    <div id="arama">
    <input type="text" class="form-control-sm" name="search" placeholder="Ürün Kategori Veya Marka Ara" id="search">
    <input type="submit" value="ARA" id="buton">
    </div>
    
    @if (Auth::check())
    <a id="giris"><i class="fas fa-user" style="margin: 7px 10px 0 -10%;"></i> {{ Auth::user()->name }}</a>
    <a id="sepet" href="{{Route("sepet",Auth::user()->name)}}">
@else
    <a id="giris" href="{{ route('girisyap') }}"><i class="fas fa-user" style="margin: 7px 10px 0 -10%;"></i> Giriş Yap</a>
    <a id="sepet" href="" style="margin:19px 0 0 20px; color:#fff;" href="{{"kamera"}}"></a>
@endif
    
<a style="color:#fff; text-decoration:none;"> 
  <i class="fas fa-shopping-cart" style="margin: 35px 10px 0 -115px; color:#fff;"></i> Sepetim  
  </a>
</header>


<nav class="navbar navbar-expand-lg">
    <div class="container-fluid" id="menu">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" id="menuic">
          <li class="nav-item" id="menuic">
            <a class="nav-link active" aria-current="page" href="{{Route("bilgisayar")}}" id="menuyazi1">BİLGİSAYAR</a>
          </li>
          <li class="nav-item" id="menuic">
            <a class="nav-link active" aria-current="page" href="{{Route("telefon")}}" id="menuyazi1">TELEFON</a>
          </li>
          <li class="nav-item" id="menuic">
            <a class="nav-link active" aria-current="page" href="{{Route("tablet")}}" id="menuyazi1">TABLET</a>
          </li>
          <li class="nav-item" id="menuic">
            <a class="nav-link" href="{{Route("kamera")}}" id="menuyazi1">KAMERA</a>
          </li>
          <li class="nav-item" id="menuic">
            <a class="nav-link" href="{{Route("mobilaksesuar")}}" id="menuyazi1">MOBİL AKSESUAR</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 