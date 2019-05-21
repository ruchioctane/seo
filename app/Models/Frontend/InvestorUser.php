<?php

namespace App\Models\Frontend;

use App\Models\Menu\Traits\Attribute\MenuAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestorUser extends Model{
        
		protected $table = 'investor_users';

		protected $guarded = ['id'];

        public static function saveInvestorUsers($data, $id=NULL){
     		$saveInvestorUsers =Self::updateOrCreate( ['id' =>$id],$data);

 		return $saveInvestorUsers;

     }

      public static function getParentUser($firm_id=NULL){

        $getData = Self::where(['firm_id'=>$firm_id,'parent_id'=>0])->first();

        if(isset($getData)  && !empty($getData)){
            return $getData;
        }else{
            return false;
        }
      }

      public static function getfirmidByUserId($user_id=NULL){
        $getData = Self::where(['user_id'=>$user_id])->first();

        if(isset($getData)  && !empty($getData)){
            return $getData;
        }else{
            return false;
        }

      }
}