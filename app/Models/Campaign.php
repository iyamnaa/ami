<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Campaign
 * @package App\Models
 * @version September 21, 2020, 10:42 pm WIB
 *
 * @property \App\Models\CampaignCategory $campaignCategory
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $campaignReports
 * @property \Illuminate\Database\Eloquent\Collection $campaignUpdates
 * @property \Illuminate\Database\Eloquent\Collection $donations
 * @property \Illuminate\Database\Eloquent\Collection $topCampaigns
 * @property \Illuminate\Database\Eloquent\Collection $wishlists
 * @property string $title
 * @property string $short_desc
 * @property string $image_cover
 * @property string $body
 * @property integer $target
 * @property string|\Carbon\Carbon $deadline
 * @property boolean $is_deleted
 * @property string $status
 * @property integer $user_id
 * @property integer $campaign_category_id
 */
class Campaign extends Model
{

    public $table = 'campaigns';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'title',
        'short_desc',
        'image_cover',
        'body',
        'target',
        'deadline',
        'is_deleted',
        'status',
        'user_id',
        'campaign_category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'short_desc' => 'string',
        'image_cover' => 'string',
        'body' => 'string',
        'target' => 'integer',
        'deadline' => 'datetime',
        'is_deleted' => 'boolean',
        'status' => 'string',
        'user_id' => 'integer',
        'campaign_category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:191',
        'short_desc' => 'required|string',
        'image_cover' => 'nullable|string|max:255',
        'body' => 'required|string',
        'target' => 'required|integer',
        'deadline' => 'required',
        'status' => 'required|string',
        'user_id' => 'required',
        'campaign_category_id' => 'required'
    ];


    public function getCampaignDonation($campaign_id)
    {
        return (Donation::where('campaign_id', $campaign_id)->where('status', 'berhasil')->get()->sum('amount')) * 7 / 8;
    }

    public function getCampaignProgress($campaign_id, $target)
    {
        return $this->getCampaignDonation($campaign_id) * 100 / $target <= 100 ? $this->getCampaignDonation($campaign_id) * 100 / $target : 100;
    }

    public function getCampaignDeadline($deadline)
    {
        $deadline = new \DateTime($deadline);
        $currentTime = new \DateTime(date('o-m-d H:i:s'));

        $diff = date_diff($deadline, $currentTime);
        $years = $diff->format('%y') != 0 ? $diff->format('%y Tahun ') : '';
        $months = $diff->format('%m') != 0 ? $diff->format('%m Bulan ') : '';
        $days = $diff->format('dy') != 0 ? $diff->format('%d Hari') : '';
        if($years == '' && $months == '' && $days == ''){
            $days = 'Hari ini';
        }
        return $years.$months.$days;
    }

    public static function deadlineCheck($campaigns, $filter)
    {
        $currentTime = new \DateTime(date('o-m-d H:i:s'));
        switch ($filter) {
            case 'Sedang Berjalan':
                return $campaigns->where('deadline', '>', $currentTime);
                break;

            case 'Telah Berakhir':
                return $campaigns->where('deadline', '<=', $currentTime);
                break;
            
            default:
                return $campaigns;
                break;
        }
    }

    public static function campaignSort($campaigns, $filter)
    {
        switch ($filter) {
            case 'Terbaru':
                return $campaigns->sortByDesc('created_at');
                break;

            case 'Jumlah Donasi ASC':
                break;

            case 'Jumlah Donasi DESC':
                return $campaigns->sortByDesc(Donation::raw('sum(amount)'));
                break;

            case 'Sisa Waktu':
                return $campaigns->sortByDesc('deadline');
                break;
            
            default:
                return $campaigns;
                break;
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function campaignCategory()
    {
        return $this->belongsTo(\App\Models\CampaignCategory::class, 'campaign_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function campaignReports()
    {
        return $this->hasMany(\App\Models\CampaignReport::class, 'campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function campaignUpdates()
    {
        return $this->hasMany(\App\Models\CampaignUpdate::class, 'campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function donations()
    {
        return $this->hasMany(\App\Models\Donation::class, 'campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function topCampaign()
    {
        return $this->hasMany(\App\Models\TopCampaign::class, 'campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function wishlists()
    {
        return $this->hasMany(\App\Models\Wishlist::class, 'campaign_id');
    }
}
