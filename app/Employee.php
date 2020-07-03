<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'company_id', 'email', 'phone'
    ];

    /**
	 * Get the company that the employee is working at.
	 */
	public function company()
	{
	    return $this->belongsTo('App\Company');
	}
}
