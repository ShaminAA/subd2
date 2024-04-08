<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

//use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    public $timestamps=false;
    use HasFactory;
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function worker(): BelongsToMany
    {
        return $this->belongsToMany(Worker::class,'worker_post');
    }
}
