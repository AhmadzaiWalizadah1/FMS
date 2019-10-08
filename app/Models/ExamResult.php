<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 08 Oct 2019 06:18:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ExamResult
 * 
 * @property string $S_ID
 * @property string $C_ID
 * @property int $Year
 * @property float $Class_activity
 * @property float $Assignment
 * @property float $Project
 * @property float $Midterm
 * @property float $Final
 * @property string $comment
 * 
 * @property \App\Models\StudentInfo $student_info
 * @property \App\Models\Course $course
 *
 * @package App\Models
 */
class ExamResult extends Eloquent
{
	protected $table = 'exam_result';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Year' => 'int',
		'Class_activity' => 'float',
		'Assignment' => 'float',
		'Project' => 'float',
		'Midterm' => 'float',
		'Final' => 'float'
	];

	protected $fillable = [
		'Class_activity',
		'Assignment',
		'Project',
		'Midterm',
		'Final',
		'comment'
	];

	public function student_info()
	{
		return $this->belongsTo(\App\Models\StudentInfo::class, 'S_ID');
	}

	public function course()
	{
		return $this->belongsTo(\App\Models\Course::class, 'C_ID');
	}
}
