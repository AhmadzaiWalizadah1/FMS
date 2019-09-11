<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kankor_Result extends Model
{
    protected $table = 'kankor_list';

    protected $fillable = [
        'k_id',
        'name',
        'f_name','',
        'gf_name',
        'last_name',
        'school',
        'e_school',
        'g_year',
        'k_exam_year',
        'kankor_score',
        'faculty',
        'province',
        'gender',

    ];

}
