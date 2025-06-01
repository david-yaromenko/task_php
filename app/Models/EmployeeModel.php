<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    public $timestamps = false;
    protected $table = 'employee';

    public function region()
    {
        return $this->belongsTo(RegionModel::class);
    }

    public function job()
    {
        return $this->belongsTo(JobTitle::class);
    }
}
