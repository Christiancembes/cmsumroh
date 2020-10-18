<?php namespace Umroh\Users\Models;

use Model;

use Umrohcom\Provinces\Models\Province;
use Umrohcom\Cities\Models\City;

/**
 * Model
 */
class User extends Model
{
   // use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    protected $connection = 'mysql_account';


    /**
     * @var string The database table used by the model.
     */
    public $table = 'users';

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
        'partner' => ['umroh\Partners\Models\Partner', 'key' => 'user_id', 'otherKey' => 'id'],
        'passport' => ['umroh\Passports\Models\Passport', 'key' => 'user_id', 'otherKey' => 'id']
    ];
    public $hasMany = [
        'review' => ['umroh\Reviews\Models\Review', 'key' => 'user_id'],
        'reward' => ['umroh\Rewards\Models\Reward', 'key' => 'owner_id'],
        'rewardClaim' => ['umroh\Rewards\Models\RewardClaim', 'key' => 'user_id'],
        'hotelRequest' => ['umroh\HotelRequests\Models\HotelRequest', 'key' => 'user_id'],
        'packagetransaction' => ['umroh\PackageTransactions\Models\PackageTransaction', 'key' => 'user_id'],
        'quotationSender' => ['umroh\Quotations\Models\Quotation', 'key' => 'sender_id'],
        'quotationReceiver' => ['umroh\Quotations\Models\Quotation', 'key' => 'receiver_id']
    ];
    public $belongsTo = [
        'province' => ['umroh\provinces\Models\province', 'key' => 'province_id', 'otherKey' => 'id'],
        'city' => ['umroh\Cities\Models\City', 'key' => 'city_id', 'otherKey' => 'id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
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


    public function getVerifiedHelperAttribute()
    {
        if ($this->verified == 0)
            return 'Belum Verifikasi';
        else if ($this->verified == 1)
            return 'Verifikasi';
    }
}
