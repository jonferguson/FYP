<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    
    /**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'academic_years';

	/**
	 * The primary key of the table
	 *
	 * @var string
	 */
	protected $primaryKey = 'academic_year';
}