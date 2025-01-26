<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/** php artisan make:model " " -a pour créer un model */

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    
    ];

    // Relation entre les tables User et Post
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
