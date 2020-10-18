<?php namespace Umroh\Packages\Models;

use Model;

/**
 * Model
 */
class Package_travel_details extends Model
{
    use \October\Rain\Database\Traits\Softdelete;
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * Set Database Connection
     */
    protected $connection = 'mysql_package';

    /**
     * Field Rules
     */
    protected $rules = [
        'day' => 'required',
        'details' => 'required',
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'package_travel_details';

    /**
     * @var array Guarded fields
    */
    protected $guarded = ['*'];

    /**
     * @var arrray Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'packages' => ['umroh\Package\Models\Package','key', 'package_id','otherKey' => 'id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    
}
