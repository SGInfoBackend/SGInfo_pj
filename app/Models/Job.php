<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = "sg_info_job";

    protected $fillable = ['Job_title', 'Company', 'SALARY', 'Job_location', 'Category_job', 'Category_job', 'Company_URL', 'Job_Description', 'exp_level'];

    public function typeofrole()
    {
        return $this->hasMany(JobTypeOfRole::class, 'Typeofrole_ID');
    }

    // public static function search($query)
    // {
    //     return empty($query) ? static::query()
    //         : static::where('Job_title', 'like', '%'.$query.'%')
    //         ->orWhere('Company', 'like', '%'.$query.'%');
    // }
}
