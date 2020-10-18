<?php namespace Umroh\Cities\Models;

use Model;

/**
 * Model
 */
class City extends Model
{
    //use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    protected $connection = 'mysql_account';

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cities';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [
        'partnersBranch' => ['umroh\Partners\Models\PartnerBranch', 'key' => 'province_id', 'otherKey' => 'id'],
        'travelers' => ['umroh\Travelers\Models\Traveler', 'key' => 'city_id', 'otherKey' => 'id'],
        'user' => ['umroh\Users\Models\User', 'key' => 'city_id', 'otherKey' => 'id'],
    ];
    public $hasMany = [
        'partners' => ['umroh\Partners\Models\Partner', 'key' => 'province_id', 'otherKey' => 'id'],
    ];
    public $belongsTo = [
        'province' => ['umroh\Provinces\Models\Province', 'key' => 'province_id', 'otherKey' => 'id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
