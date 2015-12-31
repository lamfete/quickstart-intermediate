<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
    * the attributes that are mass assignable
    *
    * @var array
    */
    protected $fillable = [
    	'name'
    ];

    /**
    * Get all of the tasks of user
    */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
