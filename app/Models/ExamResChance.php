<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 08 Oct 2019 06:19:38 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ExamResChance
 * 
 * @property string $S_ID
 * @property string $C_ID
 * @property int $Year
 * @property float $Final
 * @property int $Chance
 * @property string $comment
 * 
 * @property \App\Models\StudentInfo $student_info
 * @property \App\Models\Course $course
 *
 * @package App\Models
 */
class ExamResChance extends Eloquent
{
	protected $table = 'exam_res_chance';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Year' => 'int',
		'Final' => 'float',
		'Chance' => 'int'
	];

	protected $fillable = [
		'Year',
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
