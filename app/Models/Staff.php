<?php
 namespace App\Models;
use Reliese\Database\Eloquent\Model as Eloquent;
/**
 * Class Staff
 *
 * @property int $Staff_ID
 * @property string $Name
 * @property string $E_Name
 * @property string $Last_name
 * @property string $E_last_name
 * @property string $F_Name
 * @property string $Degree
 * @property string $E_degree
 * @property string $Position
 * @property string $E_position
 * @property string $Contact
 *
 * @property \Illuminate\Database\Eloquent\Collection $courses
 *
 * @package App\Models
 */
class Staff extends Eloquent
{
	protected $table = 'staffs';
	protected $primaryKey = 'Staff_ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Staff_ID' => 'int'
	];

	protected $fillable = [
		'Name',
		'E_Name',
		'Last_name',
		'E_last_name',
		'F_Name',
		'Degree',
		'E_degree',
		'Position',
		'E_position',
		'Contact'
	];

	public function courses()
	{
		return $this->belongsToMany(\App\Models\Course::class, 'staff_course_rel', 'Staff_ID', 'C_ID')
					->withPivot('year');
	}
}
