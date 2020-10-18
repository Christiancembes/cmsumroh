<?php namespace Umroh\Partners\Models;

use Model;
use \umroh\Provinces\Models\Province;
use \umroh\Cities\Models\City;

/**
 * Model
 */
class Partner extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;
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
    public $table = 'partners';

    /**
     * Slug field masking
     */
    protected $slugs = ['slug' => 'name'];

    /**
     * Field Rules
     */
    protected $rules = [
        'cover' => 'required',
        'name' => 'required',
        'company_name' => 'required',
        'address' => 'required',
        'province' => 'required',
        'city' => 'required',
        'email' => 'required|emial',
        'phone' => 'required',
        'customer_per_year' => 'required',
        'status' => 'required',
        'user' => 'required',
        'description' => 'required',
        'license_umrah' => 'required',
        'license_umrah_year' => 'required',
    ];

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
        'partnerincharge' => ['umroh\Partners\Models\PartnerInCharge', 'key' => 'partner_id', 'otherKey' => 'id'],
        'partneraccount' => ['umroh\Partners\Models\PartnerAccount', 'key' => 'partner_id', 'otherKey' => 'id']
    ];
    public $hasMany = [
        'partnerdocument'  => ['umroh\Partners\Models\PartnerDocument', 'key' => 'partner_id', 'otherKey' => 'id'],
        'partnerbranch'    => ['umroh\Partners\Models\PartnerBranch', 'key' => 'partner_id', 'otherKey' => 'id'],
        'packages'         => ['umroh\Packages\Models\Package', 'key' => 'partner_id', 'otherKey' => 'id'],
        'packages_count'   => ['umroh\Packages\Models\Package', 'key' => 'partner_id', 'otherKey' => 'id', 'count' => true, 'status' => 1],
        'review'           => ['umroh\Reviews\Models\Review', 'key' => 'partner_id'],
    ];
    public $belongsTo = [
        'user' => ['umroh\Users\Models\User', 'key' => 'user_id', 'otherKey' => 'id'],
        'province' => ['umroh\Provinces\Models\Province', 'key' => 'province_id', 'otherKey' => 'id'],
        'city' => ['umroh\Cities\Models\City', 'key' => 'city_id', 'otherKey' => 'id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        // 'cover' => 'System\Models\File'
    ];

    public $attachMany = [];

    public function getProvinceOptions()
    {
        $provinces = Province::lists('name', 'id');

        return $provinces;
    }

    public function getCityOptions()
    {
        if (isset($this->province->id))
        {
            $cities = City::where('province_id', '=', $this->province->id)->lists('name', 'id');
        }
        else
        {
            $cities = City::lists('name', 'id');
        }

        return $cities;
    }

    public function getStatusHelperAttribute()
    {
        if ($this->status == 0) {
            return 'Tidak Aktif';
        } else if ($this->status == 1) {
            return 'Aktif';
        }
    }

    
}
