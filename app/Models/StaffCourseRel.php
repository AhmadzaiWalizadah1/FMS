<?php
	 // using namespace model
namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class StaffCourseRel
 *
 * @property string $C_ID
 * @property int $Staff_ID
 * @property int $year
 *
 * @property \App\Models\Course $course
 * @property \App\Models\Staff $staff
 *
 * @package App\Models
 */
class StaffCourseRel extends Eloquent
{
	protected $table = 'staff_course_rel';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Staff_ID' => 'int',
		'year' => 'int'
	];

	public function course()
	{
		return $this->belongsTo(\App\Models\Course::class, 'C_ID');
	}

	public function staff()
	{
		return $this->belongsTo(\App\Models\Staff::class, 'Staff_ID');
	}
}
