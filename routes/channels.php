<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

Broadcast::channel('system', function (User $user) {
    return array('id'=>$user->id,'name' => $user->name,'photo'=>$user->profile_photo_url);
});

 
Broadcast::channel('users', function ($user) {
    return ['id' => $user->id, 'name' => $user->name ?? request()->ip(),'auth'=>is_numeric($user->id)];
});

