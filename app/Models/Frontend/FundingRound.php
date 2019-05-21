<?php

namespace App\Models\Frontend;

use App\Models\Menu\Traits\Attribute\MenuAttribute;
//use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class FundingRound extends Model
{

	
		protected $table = 'funding_round';

		protected $guarded = ['id'];

        public static function saveFunding($data,$startup_id=NULL){
     		$saveUserRole =Self::updateOrCreate( ['startup_id' =>$startup_id],$data);

     		return $saveUserRole;

     	}

     	public static function getFundingRound($startup_id){

     	 $funding_round = Self::where(['startup_id'=>$startup_id,'is_deleted'=>0,'status'=>1])->first();

     	 if(isset($funding_round) && !empty($funding_round)){
     	 	return $funding_round;
     	 }else{
     	 	return false;
     	 }		
     	}

}