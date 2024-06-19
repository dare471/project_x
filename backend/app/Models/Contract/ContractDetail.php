<?php
namespace App\Models\Contract;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'stage_description',
        'stage_date',
        'stage_amount',
        'payment_status',
        'additional_info',
        'products',
        'services',
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }
}
