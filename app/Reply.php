<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\{Favoritable, RecordsActivity};

class Reply extends Model
{

  use Favoritable, RecordsActivity;

  protected $fillable = ['body', 'user_id'];

  protected $with = ['owner', 'favorites'];

  public function owner()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function thread()
  {
    return $this->belongsTo(Thread::class);
  }

  public function path()
  {
    return $this->thread->path() . "#reply-{$this->id}";
  }

}
