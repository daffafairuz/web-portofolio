<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class MainContent extends Model
{
    use HasFactory, HasUlids;

    protected $guarded =[];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Cek jika is_active = 1 dan ada record lain yang juga aktif
            if ($model->is_active == 1 && self::where('is_active', 1)->exists() && $model->is_active != $model->getOriginal('is_active')) {
                throw ValidationException::withMessages([
                    'is_active' => 'Hanya satu record yang dapat memiliki status aktif.',
                ]);
            }
        });
    }
}
