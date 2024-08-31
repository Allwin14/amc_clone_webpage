<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent; // Ensure this is correctly imported

class Application extends Eloquent
{
    protected $collection = 'clg_reg'; // Optional: Specify the collection name
    protected $fillable = ['name', 'password','phone', 'email', 'gender', 'course'];
}
