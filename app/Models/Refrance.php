<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 08 Oct 2019 06:20:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Refrance
 * 
 * @property int $C_ID
 * @property string $C_Title
 *
 * @package App\Models
 */
class Refrance extends Eloquent
{
	protected $table = 'refrance';
	protected $primaryKey = 'C_ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'C_ID' => 'int'
	];

	protected $fillable = [
		'C_Title'
	];
}
