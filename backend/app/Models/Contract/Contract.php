<?php
namespace App\Models\Contract;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $primaryKey = 'contract_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'contract_number',
        'contract_type',
        'contract_status',
        'contract_status_description',
        'client_id',
        'client_name',
        'start_date',
        'end_date',
        'amount',
        'payment_terms',
        'products_services',
    ];

    public function details()
    {
        return $this->hasMany(ContractDetail::class, 'contract_id');
    }
}
