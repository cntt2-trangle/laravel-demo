<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

use App\Models\Country;
use App\Models\Community;
use App\Models\Expertise;
use App\Models\Workplace;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country_id',
        'gender',
        'community_id',
        'expertise_id',
        'business_type_id',
        'seek',
        'introduction',
        'workplace_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function country() {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    protected function community() {
        return $this->belongsTo(Community::class, 'community_id', 'id');
    }
    
    protected function expertise() {
        return $this->belongsTo(Expertise::class, 'expertise_id', 'id');
    }

    protected function business_type() {
        return $this->belongsTo(Expertise::class, 'business_type_id', 'id');
    }

    protected function workplace() {
        return $this->belongsTo(Workplace::class, 'workplace_id', 'id');
    }
}
