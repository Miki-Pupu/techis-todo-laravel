<?php

namespace App\Repositories;

use App\Models\User;

class TaskRepository
{
     /**
     * ユーザーのタスク一覧取得
     * 
     * @param User $user
     * @return Collefction
     */
    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at','asc')
            ->get();
    }    
}