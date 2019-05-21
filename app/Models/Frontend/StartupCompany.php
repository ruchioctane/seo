<?php

namespace App\Models\Frontend;

use App\Models\Menu\Traits\Attribute\MenuAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;


class StartupCompany extends Model{
     protected $table = 'startup_companyinfo';
     protected $guarded = ['id']; //← the field name 

     public static function saveCompanyInfo($data,$id=NULL){
     		$saveUser =Self::updateOrCreate( ['id' =>$id],$data);	
     		return $saveUser;

     }

     public static function getCompanyInfo($id){
     	$data = Self::where(['id'=>$id,'deleted_at'=>0])->first();
     	if(!empty($data)){
     	return $data;
     	}else{
     		return false;
     	}

     }

    public static function getCompanyInfoByuserId($userId){
          $data = Self::where(['user_id'=>$userId,'is_deleted'=>0])->first();
          if(!empty($data)){
          return $data;
          }else{
               return false;
          }
    }

    public static function getAllStartupDetails(){

        $data = Self::where(['is_deleted'=>0])->select("company_name")->get();

        if(isset($data) && !empty($data)){
          return $data;
        }else{
          return false;
        }  

    } 


}
