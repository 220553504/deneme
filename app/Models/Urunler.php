<?php

                namespace App\Models;
                
                use Illuminate\Database\Eloquent\Factories\HasFactory;
                use Illuminate\Database\Eloquent\Model;
                use App\Models\Urunler;
                
                class Urunler extends Model
                {
                    use HasFactory;
                    use HasFactory;
                    protected $table="urunler";
                    protected $fillable=["id","baslik","seflink","kategori","metin","resim","anahtar","description","durum","sirano","created_at","updated_at"];


                    public function users()
                    {
                        return $this->belongsToMany(User::class, 'baslik', 'resim', 'description');
                    }

                }