<?php

namespace Shopper\Framework\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Shopper\Framework\Models\System\Country;

class CountryState extends Model
{
    use HasFactory;

    protected $table = 'country_states';

    protected $guarded = [
        'id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
