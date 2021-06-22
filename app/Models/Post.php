<?php

namespace App\Models;

use App\Events\PostCreate;
use App\Events\PostDelete;
use App\Events\PostUpdate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $dispatchesEvents = [
        'updated' => PostUpdate::class,
        'created' => PostCreate::class,
        'deleted' => PostDelete::class,
    ];
}
