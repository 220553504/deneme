<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anahtar extends Model
{
    use HasFactory;
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey('sandbox-fpiQx76JRdxn28Dp7grCuseXFcrddmHO');
        $options->setSecretKey('MJI5JJDp1PRlINN1rxGk9cHX8xU6Z4Ah');
        $options->setBaseUrl('https://sandbox-api.iyzipay.com');

        return $options;
    }
}
