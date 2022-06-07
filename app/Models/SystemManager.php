<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemManager extends Model
{
    use HasFactory;
    protected $table = 'system_managers';
    protected $primaryKey = 'yonetici_id';
    public $timestamps = false;
    protected $guarded = [];
}
