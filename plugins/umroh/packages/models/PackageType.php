<?php namespace Umroh\Packages\Models;

use Model;

/**
 * Model
 */
class PackageType extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * Set Database Connection
     */
    protected $connection = 'mysql_package';

    /**
     * Slug field masking
     */
    protected $slugs = ['slug' => 'name'];

    /**
     * Field Rules
     */
    protected $rules = [
        'name' => 'required',
        'cover' => 'required',
        'description' => 'required'
    ];

    /**
     * @var string the database table used by the model.
     */
    public $table = 'package_types';

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

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
        'packages' => ['umroh\Packages\Models\Packages','key' => 'package_type_id','otherKey' => 'id'],
        'savingType' => ['umroh\Savings\Models\Saving','key' => 'package_type_id','otherKey' => 'id']
    ];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}
