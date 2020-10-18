<?php namespace Umroh\Provinces\Models;

use Model;

/**
 * Model
 */
class Province extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Set Database Connection
     */
    protected $connection = 'mysql_account';

    public $rules = [
        'name' => 'required'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'provinces';

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
        'passport' => ['umroh\Passports\Models\Passport', 'key' => 'province_id', 'otherKey' => 'id'],
        'careerPositions' => ['umroh\Careers\Models\CareerPosition', 'key' => 'province_id', 'otherKey' => 'id'],
        'user' => ['umroh\Users\Models\User', 'key' => 'province_id', 'otherKey' => 'id'],
    ];
    public $hasMany = [
        'partners' => ['umroh\Partners\Models\Partner', 'key' => 'province_id', 'otherKey' => 'id'],
        'cities' => ['umroh\Cities\Models\City', 'key' => 'province_id', 'otherKey' => 'id']
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
