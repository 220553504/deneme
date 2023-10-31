<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayarlar extends Model
{
    use HasFactory;
    protected $table="ayarlar";
    protected $fillable=["baslik","anahtar","description","telefon","mail","created_at","updated_at"];
}
