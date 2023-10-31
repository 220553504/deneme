
<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">

            <li>
                <a href="{{route('modul')}}" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Modül Ekle</span>
                </a>
            </li>

            <li class="nav-label">SAYFALAR</li>
            @if($moduller)
            @foreach($moduller as $modul)
            <li>
                <a  href="{{route('liste',$modul->seflink)}}" aria-expanded="false">
                <i class="icon-speedometer menu-icon"></i><span >{{$modul->baslik}}</span>
                </a>
               
            </li>
            @endforeach
            @endif

            <li>
                <a  href="{{route('siparisteslim')}}" aria-expanded="false">
                <i class="icon-speedometer menu-icon"></i><span >Sipariş Teslim</span>
                </a>
               
            </li>

            <li>
                <a href="{{route('ayarlar')}}" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Ayarlar</span>
                </a>
            </li>
            
                </ul>
            </li>

           
    </div>
</div>