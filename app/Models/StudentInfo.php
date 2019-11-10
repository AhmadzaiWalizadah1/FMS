<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 08 Oct 2019 06:22:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class StudentInfo
 *
 * @property string $K_ID
 * @property string $S_ID
 * @property string $E_name
 * @property string $E_f_name
 * @property string $E_faculty
 * @property int $D_ID
 * @property string $Birth_date
 * @property string $E_Birth_place
 * @property string $Native_language
 * @property string $NID_page_number
 * @property string $NID_Volume_number
 * @property string $NID_sabt_number
 * @property int $NID_general_number
 * @property string $Marital_status
 * @property string $Contact
 * @property string $Comments
 * @property string $S_image_name
 * @property string $Native_village
 * @property string $Native_district
 * @property string $Native_province
 * @property string $e_native_province
 * @property string $Currect_village
 * @property string $Current_district
 * @property string $Current_province
 * @property int $Admission_year
 * @property string $Father_job
 * @property string $Father_work_location
 * @property string $Uncle_name
 * @property string $Uncle_job
 * @property string $Uncle_work_location
 * @property string $m_name
 * @property string $m_work
 * @property string $m_work_location
 * @property string $b_name
 * @property string $b_work
 * @property string $b_work_location
 * @property int $Semester
 *
 * @property \App\Models\KankorList $kankor_list
 * @property \App\Models\Department $department
 * @property \App\Models\AdditionalSInfo $additional_s_info
 * @property \Illuminate\Database\Eloquent\Collection $exam_res_chances
 * @property \Illuminate\Database\Eloquent\Collection $exam_results
 * @property \App\Models\StudentAttenInfo $student_atten_info
 *
 * @package App\Models
 */
class StudentInfo extends Eloquent
{
	protected $table = 'student_info';
	protected $primaryKey = 'S_ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'D_ID' => 'int',
		'NID_general_number' => 'int',
		'Admission_year' => 'int',
		'Semester' => 'int'
	];

	protected $fillable = [
		'K_ID',
		'E_name',
		'E_f_name',
		'E_faculty',
		'D_ID',
		'Birth_date',
		'E_Birth_place',
		'Native_language',
		'NID_page_number',
		'NID_Volume_number',
		'NID_sabt_number',
		'NID_general_number',
		'Marital_status',
		'Contact',
		'Comments',
		'S_image_name',
		'Native_village',
		'Native_district',
		'Native_province',
		'e_native_province',
		'Currect_village',
		'Current_district',
		'Current_province',
		'Admission_year',
		'Father_job',
		'Father_work_location',
		'Uncle_name',
		'Uncle_job',
		'Uncle_work_location',
		'm_name',
		'm_work',
		'm_work_location',
		'b_name',
		'b_work',
		'b_work_location',
		'Semester'
	];

	public function kankor_list()
	{
		return $this->belongsTo(\App\Models\KankorList::class, 'K_ID');
	}

	public function department()
	{
		return $this->belongsTo(\App\Models\Department::class, 'D_ID');
	}

	public function additional_s_info()
	{
		return $this->hasOne(\App\Models\AdditionalSInfo::class, 'S_ID');
	}

	public function exam_res_chances()
	{
		return $this->hasMany(\App\Models\ExamResChance::class, 'S_ID');
	}

	public function exam_results()
	{
		return $this->hasMany(\App\Models\ExamResult::class, 'S_ID');
	}

	public function student_atten_info()
	{
		return $this->hasOne(\App\Models\StudentAttenInfo::class, 'S_ID');
	}
}
