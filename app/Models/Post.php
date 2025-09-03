<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'status',
        'priority',
        'category',
        'tags',
        'author_name',
        'publish_date',
        'featured_image',
        'excerpt',
        'meta_title',
        'meta_description',
        'view_count',
        'like_count',
        'comment_count',
        'is_featured',
        'is_published',
        'reading_time',
        'language',
        'source_url',
        'user_id',
    ];

    protected $casts = [
        'status' => 'string',
        'priority' => 'integer',
        'tags' => 'array',
        'publish_date' => 'datetime',
        'view_count' => 'integer',
        'like_count' => 'integer',
        'comment_count' => 'integer',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'reading_time' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}