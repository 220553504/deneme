<div class="side-menu">
    <div id="menuic1">+10.000 Ürün Listeleniyor</div>
    <div id="menuic2">Kategoriler</div>
    <ul>

    @if($menuler)
    @foreach ($menuler as $menu)
    <li class="nav-item">
      <a class="nav-link" href="#">{{$menu->baslik}} <i class="fas fa-chevron-down" style="margin:0 0 0 6%; color:#888;"></i></a>
    </li>   
    
    @endforeach
    @endif
    
    </ul>
    </div>