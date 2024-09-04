<?php
namespace App\Models;

use App\Models\Contract\Contract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'client_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'business_identification_number',
        'name',
        'registration_date',
        'activity_code',
        'activity_description',
        'latest_activities',
        'company_size_code',
        'kato_main_code',
        'kato_region_code',
        'kato_district_code',
        'kato_city_code',
        'kato_full_address',
        'contact_details',
        'email',
        'phone',
        'address'
    ];

    public function contracts()
    {
        return $this->hasMany(Contract::class, 'client_id');
    }

    public function visits()
    {
        return $this->hasMany(Visit::class, 'client_id');
    }
}
