<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'logo', 'website'
    ];

    /**
     * Get the company's employees.
     */
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
