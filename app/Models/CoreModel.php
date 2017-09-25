<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class CoreModel extends Model
{
    public $incrementing = false;

    use SoftDeletes;

    use UuidTrait;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'count'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4();
        });
    }
}
