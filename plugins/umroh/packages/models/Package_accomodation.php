<?php namespace Umroh\Packages\Models;

use Model;

/**
 * Model
 */
class Package_accomodation extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * Set Database Connection
     */
    protected $connection = 'mysql_package';

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'umroh_packages_package_accommodations';

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
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'package' => ['umroh\Packages\Models\Packages', 'key' => 'package_id','otherKey' => 'id'],
        'first_hotel' => ['umroh\Hotels\Models\Hotel', 'key' => 'first_hotel_id','otherKey' => 'id'],
        'second_hotel' => ['umroh\Hotels\Models\Hotel', 'key' => 'second_hotel_id','otherKey' => 'id'],
        'departure_airline' => ['umroh\Airlines\Models\Airline', 'key' => 'departure_airline_id','otherKey' => 'id'],
        'return_airline' => ['umroh\Airlines\Models\Airline', 'key' => 'return_airline_id','otheKey' => 'id'],
    ];

    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
