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
        'client_name',
        'region',
        'contact_details',
        'email',
        'phone',
        'address',
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
