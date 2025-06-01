<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegionModel extends Model
{
    public $timestamps = false;
    protected $table = 'region';
    protected $fillable = ['region_name'];

     public function employees()
    {
        return $this->hasMany(EmployeeModel::class, 'region_id');
    }

    public function materials()
    {
        return $this->hasMany(MaterialModel::class, 'region_id');
    }
}
