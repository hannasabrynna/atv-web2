<?php

namespace App\Policies;

use App\Models\User;

class LibraryPolicy
{
        public function viewAny(User $user)
        {
            return in_array($user->role, ['admin', 'bibliotecario', 'cliente']);
        }
    
        public function create(User $user)
        {
            return in_array($user->role, ['admin', 'bibliotecario']);
        }
    
        public function update(User $user)
        {
            return in_array($user->role, ['admin', 'bibliotecario']);
        }
    
        public function delete(User $user)
        {
            return $user->role === 'admin';
        }
    
}
