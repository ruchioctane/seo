<?php

namespace App\Models\Frontend;

use App\Models\Menu\Traits\Attribute\MenuAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;


class StartupRoleInvestor extends Model{
     protected $table = 'startup_role_investor';
     protected $guarded = ['id']; //← the field name 

     public static function saveStartupRoleInvestor($data,$id=NULL){
     		$saveUser =Self::updateOrCreate( ['id' =>$id],$data);	
     		return $saveUser;

     }


     public static function getStartupRoleInvestorByid($startupId=NULL){

     	$startupRoleInvest = Self::where(['startup_id'=>$startupId,'is_deleted'=>0,'status'=>1])->get();

     	if(isset($startupRoleInvest) && !empty($startupRoleInvest) ){

     		return $startupRoleInvest;
     	}else{
     		return false;
     	}
     }


 }