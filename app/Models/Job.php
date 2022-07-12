<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = "sg_info_job";

    protected $fillable = ['Job_title', 'Company', 'SALARY', 'Job_location', 'Category_job', 'Category_job', 'Company_URL', 'Job_Description'];

    public function typeofrole()
    {
        return $this->hasMany(JobTypeOfRole::class, 'Typeofrole_ID');
    }
}
