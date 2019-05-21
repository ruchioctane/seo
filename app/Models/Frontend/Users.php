<?php

namespace App\Models\Frontend;

use App\Models\Menu\Traits\Attribute\MenuAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class Users extends Model{
	 use ModelTrait,
        MenuAttribute,
        SoftDeletes{
        // MenuAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    protected $table = 'users';
    protected $guarded = ['id'];
    //protected $guarded = ['email'];

     public static function saveUser($data,$user_id=NULL){
     		$saveUser =Self::updateOrCreate( ['id' =>$user_id],$data);
     		return $saveUser;
     }

     public static function getUserData($email){
        $getUser =Self::where(['email'=>$email,'status'=>1])->first();
        if(isset($getUser) && !empty($getUser)){

           return $getUser;
        }else{
            return false;
        }
     }

     public static  function getLoggedInUserData(){
        $userData = Auth::user();
        return $userData;
     }   
        
    public static  function getAllInvestorsList(){  

       $investorList = Self::join("role_user","role_user.user_id","=","users.id")->where(['role_user.role_id'=>2,'users.status'=>1])->get();
       
       return $investorList;

    } 

}