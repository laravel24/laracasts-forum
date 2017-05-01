<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\{User, Reply};

class ReplyPolicy
{

  use HandlesAuthorization;

  public function update(User $user, Reply $reply)
  {
    return $reply->user_id == $user->id;
  }

}
