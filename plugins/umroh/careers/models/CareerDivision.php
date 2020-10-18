<?php namespace Umrohcom\Careers\Models;

use Model;

/**
 * Reward Claim Model
 */
class CareerDivision extends Model
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
        'name' => 'required',
        'tagline' => 'required'
    ];
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'career_divisions';

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
    public $hasMany = [
        'careerPosition' => ['Umrohcom\Careers\Models\CareerPosition', 'key' => 'career_divisions_id', 'otherKey' => 'id']
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    

}
