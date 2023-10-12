<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activators extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'activateds';

    protected static function newFactory()
    {
        return \Modules\Core\Database\factories\ActivatorsFactory::new();
    }
}
