<?php namespace Umrohcom\Careers\Models;

use Model;

/**
 * Reward Setting Model
 */
class CareerLevel extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Set Database Connection
     */
    protected $connection = 'mysql_core';
    
    /*
     * Field Rules
     */
    protected $rules = [
        'name' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'career_levels';

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
        'careerPosition' => ['Umrohcom\Career\Models\CareerLevel', 'key' => 'career_level_id', 'otherKey' => 'id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
  
}
