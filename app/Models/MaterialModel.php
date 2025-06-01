<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialModel extends Model
{
    public $timestamps = false;
    protected $table = 'material';

    public function materials()
    {
        return $this->belongsTo(RegionModel::class);
    }
}
