<?php namespace Umrohcom\Careers\Models;

use Model;

/**
 * Reward Claim Model
 */
class CareerFacilities extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    
    /*
     * Set Database Connection
     */
    protected $connection = 'mysql_core';
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'career_facilities';

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
    ];
    public $hasMany = [];
    public $belongsTo = [
        'careerPosition' => ['Umrohcom\Career\Models\CareerPosition', 'key' => 'career_position_id', 'otherKey' => 'id'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    

}
