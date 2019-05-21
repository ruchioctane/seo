<?php

namespace App\Models\Frontend;

use App\Models\Menu\Traits\Attribute\MenuAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Profile extends Model
{

	 // use ModelTrait,
  //       MenuAttribute,
  //       SoftDeletes{
  //           // MenuAttribute::getEditButtonAttribute insteadof ModelTrait;
  //       }
		protected $table = 'profile';

		protected $guarded = ['id'];

        public static function saveProfile($data,$user_id){
     		$saveUserProfile =Self::updateOrCreate( ['user_id' =>$user_id],$data);

     		return $saveUserProfile;
      }

       public static function getUserProfileData($user_id){

        $userProfileData =Self::where(['user_id'=>$user_id,'deleted_at'=>0])->first();

        if(isset($userProfileData) && !empty($userProfileData)){

            return $userProfileData;
        }else{
            return false;
         }
       }

}