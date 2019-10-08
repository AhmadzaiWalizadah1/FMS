<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 08 Oct 2019 06:20:13 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mytask
 * 
 * @property int $id
 * @property string $name
 * @property float $project
 * @property int $year
 * @property string $C_ID
 * @property float $bistfisad
 * @property string $final
 * @property float $class_activity
 * @property float $assignment
 *
 * @package App\Models
 */
class Mytask extends Eloquent
{
	protected $table = 'mytask';
	public $timestamps = false;

	protected $casts = [
		'project' => 'float',
		'year' => 'int',
		'bistfisad' => 'float',
		'class_activity' => 'float',
		'assignment' => 'float'
	];

	protected $fillable = [
		'name',
		'project',
		'year',
		'C_ID',
		'bistfisad',
		'final',
		'class_activity',
		'assignment'
	];
}
