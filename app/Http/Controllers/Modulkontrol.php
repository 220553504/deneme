<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Moduller;
use App\Models\Kategoriler;

class Modulkontrol extends Controller
{
    function __construct()
    {
    view()->share('moduller',Moduller::whereDurum(1)->get());
    }


    public function anasayfa()
    {
    return view('admin.degisenler.orta');
    }

    public function modul()
    {
    return view('admin.degisenler.modulekle');
    }

    public function modulekle(Request $request)
    {
    $request->validate([
    "baslik"=>"string|required",
    ]);

    $baslik=$request->baslik;
    $seflink = Str::of($baslik)->slug('-');

    $kontrol=Moduller::whereSeflink($seflink)->exists();
    if($kontrol)
    {
        return redirect()->back()->with('hata',"Modül Ekleme Başarısız");   
    }
    else
    {
        Moduller::create([
            "baslik"=>$baslik,
            "seflink"=>$seflink,
            ]);

            Kategoriler::create([
                "baslik"=>$baslik,
                "seflink"=>$seflink,
                "tablo"=>"modul",
                ]);

                Schema::create($seflink, function (Blueprint $table) {
                    $table->id();
                    $table->string('baslik');
                    $table->string('seflink');
                    $table->unsignedBigInteger('kategori')->nullable();
                    $table->text('metin')->nullable();
                    $table->string('resim',255)->nullable();
                    $table->string('anahtar',255)->nullable();
                    $table->string('description',255)->nullable();
                    $table->enum('durum',[1,2])->default();
                    $table->integer('sirano')->nullable();
                    $table->timestamps();
                    $table->foreign('kategori')->references('id')->on('kategoriler')->ondelete('cascade');
                });

                $modeldosyasi='<?php

                namespace App\Models;
                
                use Illuminate\Database\Eloquent\Factories\HasFactory;
                use Illuminate\Database\Eloquent\Model;
                
                class '.ucfirst($seflink).' extends Model
                {
                    use HasFactory;
                    use HasFactory;
                    protected $table="'.$seflink.'";
                    protected $fillable=["id","baslik","seflink","kategori","metin","resim","anahtar","description","durum","sirano","created_at","updated_at"];
                }';

                File::put(app_path('Models'."/".ucfirst($seflink).".php"),$modeldosyasi);
            
            return redirect()->back()->with('basari',"Modül Ekleme Başarılı");
    }
    
}

}
