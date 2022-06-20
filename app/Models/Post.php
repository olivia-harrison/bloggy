<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    /**
     * Determine if this post is liked by the given user.
     *
     * @param  User  $user
     * @return bool
     */
    public function isLikedBy(User $user): bool
    {
        return $this->likes()->where('user_id', '=', $user->id)->exists();
    }

    /**
     * The likes for the model.
     *
     * @return HasMany
     */
    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }
}
