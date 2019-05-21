<?php

namespace App\Models\Frontend;

use App\Models\Menu\Traits\Attribute\MenuAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{

	 use ModelTrait,
        MenuAttribute,
        SoftDeletes{
            // MenuAttribute::getEditButtonAttribute insteadof ModelTrait;
        }
		protected $table = 'role_user';

		protected $guarded = ['id'];

        public static function saveRole($data){
     		$saveUserRole =Self::updateOrCreate( ['role_id' =>$data['role_id'], 'user_id'=>$data['user_id'] ],$data);

     		return $saveUserRole;

     }
}