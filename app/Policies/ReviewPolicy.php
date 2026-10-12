<?php

namespace App\Policies;

use App\Models\Review;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ReviewPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function update(User $user, Review $review): bool
    {
        // Hanya pemilik ulasan atau admin yang boleh mengedit
        return $user->id === $review->user_id || $user->role === 'admin';
    }

    public function delete(User $user, Review $review): bool
    {
        // Hanya pemilik ulasan atau admin yang boleh menghapus
        return $user->id === $review->user_id || $user->role === 'admin';
    }
}
