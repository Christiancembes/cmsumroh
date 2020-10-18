<?php namespace Umroh\Partners\Models;

use Model;

/**
 * Model
 */
class PartnerInCharge extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Set Database Connection
     */
    protected $connection = 'mysql_package';

    /*
     * Field Rules
     */
    protected $rules = [
        'partner'      => 'required',
        'name'         => 'required',
        'position'     => 'required',
        'phone'        => 'required',
        'email'        => 'required|email',
        'id_card_type' => 'required',
        'id_card_no' => 'required',
        'npwp' => 'required'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'partner_in_charge';

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
        'partner' => ['umroh\Partners\Models\Partner', 'key' => 'partner_id', 'otherKey' => 'id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
