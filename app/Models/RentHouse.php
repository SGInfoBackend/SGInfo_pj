<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentHouse extends Model
{
    use HasFactory;
    protected $table = "sg_info_rent_house";
    protected $primaryKey = 'Rent_House_ID';

    public function keyfeatures()
    {
        return $this->belongsTo(KeyFeature::class);
    }

    public function facilities()
    {
        return $this->hasOne(Facilitity::class);
    }
}
