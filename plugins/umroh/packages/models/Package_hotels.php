<?php namespace Umroh\Packages\Models;

use Model;

/**
 * Model
 */
class Package_hotels extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Validation;

    /*
    * Set Database Connection
    */
    protected $connection = 'mysql_package';

    /*
    * Field Rules
    */
    protected $rules = [
        'hotel' => 'required',
        'check_in_date' => 'required',
        'check_out_date' => 'required',
    ];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'package_hotels';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'hotel' => ['umroh\hotels\models\hotel','key' => 'hotel_id','otherKey' => 'id'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
