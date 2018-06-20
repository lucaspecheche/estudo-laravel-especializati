<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    public $timestamps = false; //Não insere as os creat_at e update_at a cada utili

    public function deposit($value)
    {
        dd($value);
    }
}
