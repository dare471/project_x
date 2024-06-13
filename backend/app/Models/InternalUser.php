<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class InternalUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(InternalProfile::class, 'user_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'employee_id');
    }

    public function visits()
    {
        return $this->hasMany(Visit::class, 'employee_id');
    }
}
