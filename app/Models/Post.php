<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'sg_info_post';

    public function applyJob()
    {
        return $this->hasOne(ApplyJob::class);
    }
}
