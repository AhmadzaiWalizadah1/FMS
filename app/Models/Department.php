<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 08 Oct 2019 06:18:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Department
 * 
 * @property int $D_ID
 * @property string $Title
 * @property string $E_title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $courses
 * @property \Illuminate\Database\Eloquent\Collection $student_infos
 *
 * @package App\Models
 */
class Department extends Eloquent
{
	protected $primaryKey = 'D_ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'D_ID' => 'int'
	];

	protected $fillable = [
		
	];

	public function courses()
	{
		return $this->hasMany(\App\Models\Course::class, 'D_ID');
	}

	public function student_infos()
	{
		return $this->hasMany(\App\Models\StudentInfo::class, 'D_ID');
	}
}
