<?php

namespace Devhau\AdminKit\Traits;

use Illuminate\Support\Facades\Auth;

trait ChangeByUser
{
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $user = Auth::user();
            $model->created_by = $user ? $user->id : null;
            $model->updated_by = NULL;
        });

        static::updating(function ($model) {
            $user = Auth::user();
            $model->updated_by = $user ? $user->id : null;
        });
    }
}
