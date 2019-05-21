<?php

namespace App\Models\Frontend;

use App\Models\Menu\Traits\Attribute\MenuAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;


class Investor extends Model{
     protected $table = 'investor_details';
     protected $guarded = ['id']; //← the field name 

     public static function saveAccreditation($data,$id){
     		$saveUser =Self::updateOrCreate( ['id' =>$id],$data);	
     		return $saveUser;

     }

     public static function getInvestorsDetail($id){
     	$data = Self::where(['id'=>$id,'deleted_at'=>0])->first();
     	if(!empty($data)){

     	return $data;
     	}else{
     		return false;
     	}
     }
     public static function getAllInvestor($id){
          $data = Self::where(['id'=>$id,'deleted_at'=>0])->first();
          if(!empty($data)){

          return $data;
          }else{
               return false;
          }
     }


}
