<?php

namespace Mdhesari\LaravelCountryStateCities\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $casts = [
        'translations' => 'array',
        'timezones'    => 'array',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
