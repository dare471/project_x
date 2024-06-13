<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'task_title',
        'task_description',
        'due_date',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(InternalUser::class, 'employee_id');
    }
}
