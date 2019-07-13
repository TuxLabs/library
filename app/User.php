<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'member_id', 'personal_id', 'phone_number', 'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function generateMemberId($status = 0){
        $last = User::all()->last();
        $start_member_id = '000001';

        if($status == 0){
            $code = 'MHS';
        }else{
            $code = 'KRY';
        }
        
        if($last){
            $member_id_last = substr($last->member_id, -6);
            $zero_code = strlen($member_id_last) - strlen((int) $member_id_last);

            $zero_code_str = '';
            for($i = 0; $i < $zero_code; $i++){
                $zero_code_str .= "0";
            }

            $new_member_id = (int) $member_id_last + 1;
            $member_id = "$code$zero_code_str$new_member_id";
        }else{
            $member_id = "$code$start_member_id";
        }

        return $member_id;
    }
}
