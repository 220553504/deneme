<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odenensiparisler extends Model
{
    use HasFactory;
    protected $table="odenensiparisler";
    protected $fillable=["id","name","urunadi","urunresim","urunfiyat","created_at","updated_at"];
}
