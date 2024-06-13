<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'title',
        'content',
    ];

    public function author()
    {
        return $this->belongsTo(ExternalUser::class, 'author_id');
    }
}
