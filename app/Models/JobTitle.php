<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    public $timestamps = false;

    public function employee()
    {
        return $this->hasMany(EmployeeModel::class);
    }
}
