<?php

namespace App\Policies;

use App\Models\{Question, User};

class QuestionPolicy
{
    public function publish(User $user, Question $question): bool
    {
        return $question->created_by === $user->id;
    }
}
