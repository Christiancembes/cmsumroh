<?php namespace Umroh\Packages\Models;

use Model;
use umroh\packagefacility\Models\packagefacility;
use umroh\packagetype\Models\packagetype;


/**
 * Model
 */
class Package extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;    
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * Set Database Connrction
     */
    protected $connection = 'mysql_package';

    /**
     * slug field masking
     */
    protected $slugs = ['slug' => 'name'];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * Field Rules
     */
    protected $rules = [
        'name' => 'required',
        'packageType' => 'required',
        'partner' => 'required',
        'description' => 'required',
        'days' => 'required',
        'quota' => 'required',
        'price' => 'required',
        'package_start' => 'required',
        'package_end' => 'required',
        'packageFacility' => 'required',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'packages';

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
        'packageAccommodation' => ['umroh\Packages\Models\PackageAccommodation','key' => 'package_id','otherKey' => 'id'],

    ];

    public $hasMany = [
        'packageCombination' => ['umroh\Packages\Models\PackageCombination','key' => 'package_id','otherKey' => 'id'],
        'review' => ['umroh\Reviews\Models\Review','key' => 'package_id'],
        'hotelRequest' => ['umroh\HotelRequests\Models\HotelRequest','key' => 'package_id'],
        'packageHotels' => ['umroh\Packages\Models\PackageHotels','key' => 'package_id','otherKey' => 'id'],
        'packageFlights' => ['umroh\Packages\Models\PackageFlight', 'key' => 'package_id', 'otherKey' => 'id'],
        'packageTravelDetail' => ['umroh\Packages\Models\PackageTravelDetail', 'key' => 'package_id', 'otherKey' => 'id'],
        'packageVideo' => ['umroh\Packages\Models\PackageVideo', 'key' => 'package_id', 'otherKey' => 'id']
    ];
    public $belongsTo = [
        'packageFacility' => ['umroh\PackageFacility\Models\PackageFacility','key' => 'package_facility_id', 'otherKey' => 'id'],
        'packageType' => ['umroh\Packages\Models\PackageType', 'key', 'package_type_id', 'otherKey' => 'id'],
        'partner' => ['umroh\Partners\Models\Partner','key' => 'partner_id', 'otherKey' => 'id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getPackageFacilityOptions()
    {
        if (isset($this->partner->id))
        {
            $facilities = PackageFacility::where('partner_id', '=', $this->partner->id)->lists('name','id');
        }
        else
        {
            $facilities = PackageFacility::lists('name','id');
        }
        return $facilities;
    }

    public function getStatusPopularAttribute()
    {
        if ($this->is_popular == 0 || $this->is_popular == NULL) {
            return 'Tidak Popular';
        } else if($this->is_popular == 1) {
            return 'Paket Popular';
        }
    }

    public function getStatusPaketAttribute()
    {
        if ($this->status == 0 || $this->status == NULL) {
            return 'Inactive';
        } else if($this->status == 1) {
            return 'Active';
        }
    }
}
