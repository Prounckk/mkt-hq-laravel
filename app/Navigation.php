<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $navItems = [
      'id',
      'parent_id',
      'name',
      'link',
        'locale',

    ];
}
