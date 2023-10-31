<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Urunler;
use App\Models\User;
use App\Models\Siparisler;
use App\Models\Anahtar;
use App\Models\OdenenSiparisler;

class Homecontrol extends Controller
{

    function __construct()
    {
    view()->share("menuler",Menu::whereDurum(1)->get());
    }

    public function home()
    {
    $urunler=Urunler::whereDurum(1)->get();
    if($urunler)
    {
        return view("home.degisen.home",compact("urunler"));
    }
    
    }

    public function girisyap()
    {
    return view("home.degisen.girisyap");
    }

    public function bilgisayar()
    {
    $urunler=Urunler::whereDurum(1)->get();
    if($urunler)
    {
        return view("home.degisen.bilgisayar",compact("urunler"));
    }
    
    }

    public function telefon()
    {
    $urunler=Urunler::whereDurum(1)->get();
    if($urunler)
    {
        return view("home.degisen.telefon",compact("urunler"));
    }
    
    }

    public function mobil()
    {
    $urunler=Urunler::whereDurum(1)->get();
    if($urunler)
    {
        return view("home.degisen.mobilaksesuar",compact("urunler"));
    }
    
    }

    public function tablet()
    {
    $urunler=Urunler::whereDurum(1)->get();
    if($urunler)
    {
        return view("home.degisen.tablet",compact("urunler"));
    }
    
    }

    public function kamera()
    {
    $urunler=Urunler::whereDurum(1)->get();
    if($urunler)
    {
        return view("home.degisen.kamera",compact("urunler"));
    }
    
    }

    public function sepet($name)
    {
    $kontrol=Siparisler::whereName($name)->get();
    if($kontrol)
    {
        return view("home.degisen.sepet",compact("kontrol"));
    }
    else
    {
    return redirect()->route("house");
    }
    
    
    }

    public function kayitol()
    {
   
        return view("home.degisen.kayitol");
    
    }

    public function kayitpost(Request $request)
    {
    $name=$request->name;
    $sifre=bcrypt($request->sifre);
    $kayit=User::create([
    "name"=>$name,
    "password"=>$sifre,
    "isim"=>$name,
    ]);

    if($kayit)
    {
        return redirect()->route("girisyap")->with("basari","kullanici oluşturuldu");
    }
    else
    {
        return redirect()->route("kayitol")->with("hata","kullanici oluşturulamadi");
    }
}


    public function girispost(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->sifre])) {
            // Kullanıcı doğrulandı, oturum başlatılıyor
            return redirect()->route('house');
        } else {
            // Kullanıcı doğrulanamadı, giriş sayfasına yönlendiriliyor
            return redirect()->route('girisyap');
        }
    }


    public function sepetekle($name, $resim, $baslik, $fiyat)
{
    $ekle = Siparisler::create([
        'name' => $name,
        'urunadi' => $baslik,
        'urunresim' => $resim,
        'urunfiyat' => $fiyat,
    ]);

    return redirect()->back();
}


public function sil($name, $id)
{
$sil=Siparisler::whereName($name)->whereId($id)->delete();
return redirect()->route("sepet",$name);
}


public function payment(Request $request)
    {

      $kartno=$request->kartno;
      $sontarih=$request->sontarih;
      $cvc=$request->cvc;
      $toplamtutar=$request->toplamtutar;

      $options = Anahtar::options();

      $request = new \Iyzipay\Request\CreatePaymentRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("123456789");
$request->setPrice($toplamtutar);
$request->setPaidPrice($toplamtutar);
$request->setCurrency(\Iyzipay\Model\Currency::TL);
$request->setInstallment(1);
$request->setBasketId("B67832");
$request->setPaymentChannel(\Iyzipay\Model\PaymentChannel::WEB);
$request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
$paymentCard = new \Iyzipay\Model\PaymentCard();
$paymentCard->setCardHolderName("John Doe");
$paymentCard->setCardNumber("5890040000000016");
$paymentCard->setExpireMonth("12");
$paymentCard->setExpireYear("2030");
$paymentCard->setCvc("123");
$paymentCard->setRegisterCard(0);
$request->setPaymentCard($paymentCard);
$buyer = new \Iyzipay\Model\Buyer();
$buyer->setId("BY789");
$buyer->setName("John");
$buyer->setSurname("Doe");
$buyer->setGsmNumber("+905350000000");
$buyer->setEmail("email@email.com");
$buyer->setIdentityNumber("74300864791");
$buyer->setLastLoginDate("2015-10-05 12:43:35");
$buyer->setRegistrationDate("2013-04-21 15:12:09");
$buyer->setRegistrationAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
$buyer->setIp("85.34.78.112");
$buyer->setCity("Istanbul");
$buyer->setCountry("Turkey");
$buyer->setZipCode("34732");
$request->setBuyer($buyer);
$shippingAddress = new \Iyzipay\Model\Address();
$shippingAddress->setContactName("Jane Doe");
$shippingAddress->setCity("Istanbul");
$shippingAddress->setCountry("Turkey");
$shippingAddress->setAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
$shippingAddress->setZipCode("34742");
$request->setShippingAddress($shippingAddress);
$billingAddress = new \Iyzipay\Model\Address();
$billingAddress->setContactName("Jane Doe");
$billingAddress->setCity("Istanbul");
$billingAddress->setCountry("Turkey");
$billingAddress->setAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
$billingAddress->setZipCode("34742");
$request->setBillingAddress($billingAddress);
$basketItems = array();
$firstBasketItem = new \Iyzipay\Model\BasketItem();
$firstBasketItem->setId("BI101");
$firstBasketItem->setName("Binocular");
$firstBasketItem->setCategory1("Collectibles");
$firstBasketItem->setCategory2("Accessories");
$firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
$firstBasketItem->setPrice($toplamtutar);
$basketItems[0] = $firstBasketItem;

$request->setBasketItems($basketItems);

$payment = \Iyzipay\Model\Payment::create($request, $options);

if ($payment->getStatus() === "success") {
    // Ödeme başarılıysa
    $name = auth()->user()->name; // Kullanıcının adını alabilirsiniz (varsayılan olarak giriş yapmış kullanıcıya ait)
    $sepetUrunleri = Siparisler::where('name', $name)->get();

    foreach ($sepetUrunleri as $urun) {
        OdenenSiparisler::create([
            'name' => $urun->name,
            'urunadi' => $urun->urunadi,
            'urunresim' => $urun->urunresim,
            'urunfiyat' => $urun->urunfiyat,
        ]);
    }

    // Şimdi Siparisler tablosundan ürünleri silebilirsiniz
    Siparisler::where('name', $name)->delete();

    return redirect()->back()->with("basari","Ödeme İşlemi Başarılı. Ürününüz Kargoya En Yakın Zamanda Verilecektir.");
} else {
    return redirect()->back()->with("hata","Ödeme İşlemi Başarısız");
}


}


}
