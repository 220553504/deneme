<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Moduller;
use App\Models\ayarlar;
use App\Models\Odenensiparisler;

class Modulyonetim extends Controller
{

    function __construct()
    {
    view()->share('moduller',Moduller::whereDurum(1)->get());
    }

    public function liste($modul)
    {
        $kontrol=Moduller::whereSeflink($modul)->whereDurum(1)->first();
        if($kontrol)
        {
            $modeldosya=ucfirst($kontrol->seflink);
            $dinamikmodel="App\Models\\".$modeldosya;
            $veriler=$dinamikmodel::get();
            return view('admin.degisenler.liste',compact(["kontrol","veriler"]));
        }
        else
        {
            return redirect()->route('home');
        }
    
    }

    public function ekle($modul)
    {
    $kontrol=Moduller::whereSeflink($modul)->whereDurum(1)->first();
    if($kontrol)
    {
        return view('admin.degisenler.ekle',compact('kontrol'));
    }
    else
    {
    return redirect()->route('home');
    }

    }

    public function eklepost($modul,Request $request)
    {
        $kontrol=Moduller::whereSeflink($modul)->whereDurum(1)->first();
        if($kontrol)
        {
            $modeldosya=ucfirst($kontrol->seflink);
            $request->validate([
            "baslik"=>"required|string",
            "anahtar"=>"required", 
            "description"=>"required", 
            "sirano"=>"required", 
            ]);
    
            $baslik=$request->baslik;
            $seflink = Str::of($baslik)->slug('-');
            $kategori=$request->kategori;
            $metin=$request->metin;
            $anahtar=$request->anahtar;
            $description=$request->description;
            $sirano=$request->sirano;
            $dinamikmodel="App\Models\\".$modeldosya;
            $resimdosya=$request->file('resim');           
            if($resimdosya)
            {
                $resim=uniqid().".".$resimdosya->GetClientOriginalExtension();
                $resimdosya->move(public_path('house/images/'.$kontrol->seflink),$resim);
                
                $ekle=$dinamikmodel::create([
                "baslik"=>$baslik,
                "seflink"=>$seflink,
                "kategori"=>$kategori,
                "metin"=>$metin,
                "anahtar"=>$anahtar,
                "description"=>$description,
                "sirano"=>$sirano,
                "resim"=>$resim,
                ]);

                return redirect()->back()->with('basari',"Kayıt Ekleme Başarılı");
            }
            else
            {
                $ekle=$dinamikmodel::create([
                    "baslik"=>$baslik,
                    "seflink"=>$seflink,
                    "kategori"=>$kategori,
                    "metin"=>$metin,
                    "anahtar"=>$anahtar,
                    "description"=>$description,
                    "sirano"=>$sirano,
                ]);

                return redirect()->back()->with('basari',"Kayıt Ekleme Başarılı");

            }
            
        }
        else
        {
        return redirect()->route('home');
        }

    }

    public function duzenle($modul,$id)
    {
    $kontrol=Moduller::whereSeflink($modul)->whereDurum(1)->first();
    if($kontrol)
    {
    $modeldosya=ucfirst($kontrol->seflink);
    $dinamikmodel="App\Models\\".$modeldosya;
    $veriler=$dinamikmodel::whereId($id)->first();
    return view('admin.degisenler.duzenle',compact(["kontrol","veriler"]));
    }
    else
    {
    return redirect()->route('home');
    }

    
    }

    public function duzenlepost($modul,$id,Request $request)
    {
        $kontrol=Moduller::whereSeflink($modul)->whereDurum(1)->first();
        if($kontrol)
        {
            $modeldosya=ucfirst($kontrol->seflink);
            $request->validate([
            "baslik"=>"required|string",
            "anahtar"=>"required", 
            "description"=>"required", 
            "sirano"=>"required", 
            ]);
    
            $baslik=$request->baslik;
            $seflink = Str::of($baslik)->slug('-');
            $kategori=$request->kategori;
            $metin=$request->metin;
            $anahtar=$request->anahtar;
            $description=$request->description;
            $sirano=$request->sirano;
            $dinamikmodel="App\Models\\".$modeldosya;
            $resimdosya=$request->file('resim');           
            if($resimdosya)
            {
                $resim=uniqid().".".$resimdosya->GetClientOriginalExtension();
                $resimdosya->move(public_path('images/'.$kontrol->seflink),$resim);
                
                $ekle=$dinamikmodel::whereId($id)->update([
                "baslik"=>$baslik,
                "seflink"=>$seflink,
                "kategori"=>$kategori,
                "metin"=>$metin,
                "anahtar"=>$anahtar,
                "description"=>$description,
                "sirano"=>$sirano,
                "resim"=>$resim,
                ]);

                return redirect()->back()->with('basari',"Güncelleme Işlemi Başarılı");
            }
            else
            {
                $ekle=$dinamikmodel::whereId($id)->update([
                    "baslik"=>$baslik,
                    "seflink"=>$seflink,
                    "kategori"=>$kategori,
                    "metin"=>$metin,
                    "anahtar"=>$anahtar,
                    "description"=>$description,
                    "sirano"=>$sirano,
                ]);

                return redirect()->back()->with('basari',"Güncelleme Işlemi Başarılı");

            }
            
        }
        else
        {
        return redirect()->route('home');
        }

    }

    public function sil($modul,$id)
    {
    $kontrol=Moduller::whereSeflink($modul)->whereDurum(1)->first();
    if($kontrol)
    {
    $modeldosya=ucfirst($kontrol->seflink);
    $dinamikmodel="App\Models\\".$modeldosya;
    $veriler=$dinamikmodel::whereId($id)->first();
    if($veriler)
    {
    $sil=$dinamikmodel::whereId($id)->delete();
    return redirect()->route('liste',$kontrol->seflink);
    }

    }
    else
    {
    return redirect()->route('home');
    }
    
    }

    public function durum($modul,$id)
    {
    $kontrol=Moduller::whereSeflink($modul)->first();
    if($kontrol)
    {
    $modeldosya=ucfirst($kontrol->seflink);
    $dinamikmodel="App\Models\\".$modeldosya;
    $veriler=$dinamikmodel::whereId($id)->first();
    if($veriler->durum==1)
    {
    $durum=2;
    }
    else
    {
    $durum=1;
    }

    $guncelle=$dinamikmodel::whereId($id)->update([
    "durum"=>$durum,
    ]);

    return redirect()->back();

    }
    else
    {
        return redirect()->route('home');
    }
    
    }

    public function ayarlar()
    {
    $kontrol=Ayarlar::whereId(1)->first();
    if($kontrol)
    {
    return view("admin.degisenler.ayarlar",compact('kontrol'));
    }
    else
    {
    return redirect()->route('home');
    }
    
    }


    public function ayarlarpost(Request $request)
    {
        $kontrol=Ayarlar::first();
        if($kontrol)
        {
            $baslik=$request->baslik;
            $anahtar=$request->anahtar;
            $description=$request->description;
            $telefon=$request->telefon;
            $mail=$request->mail;


                Ayarlar::whereId(1)->update([
                "baslik"=>$baslik,
                "anahtar"=>$anahtar,
                "description"=>$description,
                "telefon"=>$telefon,
                "mail"=>$mail,
                ]);
                
                return redirect()->route('ayarlar')->with('basari',"Güncelleme Işlemi Başarılı");
            }
            else
            {
            return redirect()->route('home');
            }

        }

            public function siparisteslim()
            {
            $siparisler=Odenensiparisler::get();
            if($siparisler)
            {
            return view("admin.degisenler.siparisteslim",compact("siparisler"));
            }

            
            }


            public function siparissil($name,$id)
            {
            $sil=Odenensiparisler::whereName($name)->whereId($id)->delete();
            if($sil)
            {
                return redirect()->route("siparisteslim")->with("basari","Ürün Silme Başarılı");
            }
            else
            {
                return redirect()->route("siparisteslim")->with("hata","Ürün Silme Başarısız");
            }
            
            }
            
   

}
