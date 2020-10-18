<?php namespace Umroh\Packages\Models;

use Model;

/**
 * Model
 */
class Package_flights extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
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
     * Field Rules
     */
    protected $rules = [
        'departureFrom' => 'required',
        'departureTo' => 'required',
        'departure_date' => 'required',
        'airline' => 'required',
        'description' => 'required',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'umroh_packages_package_flights';

    /**
     * @var array Guarded fields
     */
    public $guarded = ['*'];

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
        'airline' => ['umroh\Airlines\Models\Airlines', 'key' => 'airline_id', 'otherKey' => 'id'],
        'departureFrom' => ['umroh\Airports\Models\Airport', 'key' => 'departure_from'],
        'departureTo' => ['umroh\Airports\Models\Airport', 'key' => 'departure_to']
    ];

    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
