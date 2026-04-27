<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $fillable = [
    'name',
    'label',
  ];

  public $timestamps = true;

  public function users()
  {
    return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
  }
}
