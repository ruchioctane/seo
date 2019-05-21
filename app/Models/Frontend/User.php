<?php

namespace App\Models\Frontend;

use App\Models\Menu\Traits\Attribute\MenuAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{


	 use ModelTrait,
        MenuAttribute,
        SoftDeletes{
            // MenuAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

     protected $table = "users";





}