<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function updateValue($key, $value)
    {
        $settings = self::first();

        $vals = json_decode($settings->values);
        $vals->$key = $value;

        $settings->values = json_encode($vals);
        $settings->save();

        return true;
    }
}
