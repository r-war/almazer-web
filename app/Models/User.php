<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
/**
 * Class User
 * @package App\Models
 * @version November 6, 2019, 12:32 pm UTC
 *
 * @property string type
 * @property string number
 * @property string name
 * @property string email
 * @property string vin
 * @property string date_of_birth
 * @property string address
 * @property string mobile_phone
 * @property string license_plate
 * @property string size
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 */
class User extends Authenticatable
{
    use Notifiable, SoftDeletes,HasApiTokens;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $hidden = [
        'password',
        'remember_token',        
    ];


    public $fillable = [
        'type',
        'number',
        'name',
        'email',
        'vin',
        'date_of_birth',
        'address',
        'mobile_phone',
        'license_plate',
        'size',
        'email_verified_at',
        'password',
        'firebase_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'number' => 'string',
        'name' => 'string',
        'email' => 'string',
        'vin' => 'string',
        'date_of_birth' => 'date',
        'address' => 'string',
        'mobile_phone' => 'string',
        'license_plate' => 'string',
        'size' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'firebase_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'vin' => 'required',
        'date_of_birth' => 'required',
        'mobile_phone' => 'required',
        'license_plate' => 'required',
        'size' => 'required',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function isStaff() : bool
    {
        return $this->attributes['type'] === 'staff';
    }

    public function isVendor() : bool
    {
        return $this->attributes['type'] === 'vendor';
    }

    
}
