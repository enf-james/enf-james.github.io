<?php
/**
 * Redis Docs: https://redis.io/commands#hash
 *
 * 1、HSET key field value
 * Sets field in the hash stored at key to value.
 *
 * 2、HDEL key field
 * Removes the specified fields from the hash stored at key.
 */
namespace Traits;


trait HasCache
{
    protected function getCacheKey()
    {
        return $this->getTable();
    }

    protected function getCacheField()
    {
        return $this->getKey();
    }

    protected static function boottttttttttttttt()
    {
        parent::boot();

        static::retrieved(function($model){
            \Redis::hset($model->getCacheKey(), $model->getCacheField(), $model);
        });

        static::saved(function($model){
            \Redis::hset($model->getCacheKey(), $model->getCacheField(), $model);
        });

        static::deleted(function($model){
            \Redis::hdel($model->getCacheKey(), $model->getCacheField());
        });
    }
}
