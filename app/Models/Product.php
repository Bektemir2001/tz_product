<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    const AVAILABLE = 'available';
    const UNAVAILABLE = 'unavailable';

    public static function getStatuses(): array
    {
        return [
            self::AVAILABLE => 'Доступен',
            self::UNAVAILABLE => 'Не доступен',
        ];
    }
    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => self::getStatuses()[$value]
        );
    }

    protected function data(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => json_decode($value, true)
        );
    }
}
