<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyFeature extends Model
{
    use HasFactory;
    protected $table = "sg_info_keyfeature";
    protected $primaryKey = 'KeyFeature_ID';

    public function renthouse()
    {
        return $this->hasOne(RentHouse::class, 'KeyFeature_IDS');
    }
}
