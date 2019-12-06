<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 08 Oct 2019 06:16:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Course
 * 
 * @property string $C_ID
 * @property string $Title
 * @property string $E_title
 * @property int $Credits
 * @property int $Semester
 * @property int $D_ID
 * @property int $Year
 * 
 * @property \App\Models\Department $department
 * @property \Illuminate\Database\Eloquent\Collection $exam_res_chances
 * @property \Illuminate\Database\Eloquent\Collection $exam_results
 * @property \Illuminate\Database\Eloquent\Collection $staff
 * @property \App\Models\StudentAttenInfo $student_atten_info
 *
 * @package App\Models
 */
class Course extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Credits' => 'int',
		'Semester' => 'int',
		'D_ID' => 'int',
		'Year' => 'int'
	];

	public function department()
	{
		return $this->belongsTo(\App\Models\Department::class, 'D_ID');
	}

	public function exam_res_chances()
	{
		return $this->hasMany(\App\Models\ExamResChance::class, 'C_ID');
	}

	public function exam_results()
	{
		return $this->hasMany(\App\Models\ExamResult::class, 'C_ID');
	}

	public function staff()
	{
		return $this->belongsToMany(\App\Models\Staff::class, 'staff_course_rel', 'C_ID', 'Staff_ID')
					->withPivot('year');
	}

	public function student_atten_info()
	{
		return $this->hasOne(\App\Models\StudentAttenInfo::class, 'C_ID');
	}
}
