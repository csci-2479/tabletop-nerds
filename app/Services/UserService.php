<?php

namespace App\Services;

use App\Repositories\UserRepository; 
use App\Models\Reviews;

class UserService 
{
    public function __construct(UserRepository $userRepository)
        {
            $this->userRepository = $userRepository;
        }

    public function getWishlistByUserId(): array
    {
        return $this->userRepository->getWishlistByUserId();
    }

    public function submitGameReview(int $game_id, int $user_id, float $game_rating, string $text_review):Reviews
    {
        return $this->userRepository->InsertGameReview($game_id, $user_id, $game_rating, $text_review);
    }
}
