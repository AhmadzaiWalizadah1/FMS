<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 08 Oct 2019 06:20:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class KankorList
 *
 * @property string $k_id
 * @property string $name
 * @property string $f_name
 * @property string $gf_name
 * @property string $last_name
 * @property string $school
 * @property string $e_school
 * @property int $g_year
 * @property int $k_exam_year
 * @property float $kankor_score
 * @property string $faculty
 * @property string $province
 * @property string $gender
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $created_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $student_infos
 *
 * @package App\Models
 */
class KankorList extends Eloquent
{
	protected $table = 'kankor_list';
	protected $primaryKey = 'k_id';
	public $incrementing = false;

	protected $casts = [
		'g_year' => 'int',
		'k_exam_year' => 'int',
		'kankor_score' => 'float'
	];

	protected $fillable = [
		'k_id',
		'name',
		'f_name',
		'gf_name',
		'last_name',
		'school',
		'e_school',
		'g_year',
		'k_exam_year',
		'kankor_score',
		'faculty',
		'province',
		'gender'
	];

	public function student_infos()
	{
		return $this->hasMany(\App\Models\StudentInfo::class, 'K_ID');
	}
}
