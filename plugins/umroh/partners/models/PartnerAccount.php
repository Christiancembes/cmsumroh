<?php namespace Umroh\Partners\Models;

use Model;
use umroh\Provinces\Models\Province;
use umroh\Cities\Models\City;

/**
 * Model
 */
class PartnerAccount extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * Set Database Connection
     */
    protected $connection = 'mysql_package';

    /*
     * Field Rules
     */
    protected $rules = [
        'partner'              => 'required',
        'bank'              => 'required',
        'bank_no'           => 'required',
        'bank_owner_name'   => 'required'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'partners_accounts';

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
        'bank' => ['umroh\Banks\Models\Bank', 'key' => 'bank_id', 'otherKey' => 'id'],
        'partner' => ['umroh\Partners\Models\Partner', 'key' => 'partner_id', 'otherKey' => 'id']
    ];

    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
