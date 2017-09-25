<?php
namespace App\Models\Traits;
use Ramsey\Uuid\Uuid;
trait UuidTrait
{
    /**
     * Automatically generates and adds UUID to model
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (!isset($model->attributes['id'])) {
                $model->attributes['id'] = Uuid::uuid4();
            } else {
                $model->{$model->getKeyName()} = $model->attributes['id'];
            }
        });
    }
}
