<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as  Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class User extends Authenticatable
{

    protected $table = 'users';
    protected $fillable = [
        'email', 'password',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role','user_roles','user_id','role_id');
    }

    public function hasAnyRole($roles)
    {
        if(is_array($roles))
        {
            foreach($roles as $role)
            {
                if($this->hasRole($role))
                {
                    return true;
                }
            }
        }
        else
        {
            if($this->hasRole($roles))
            {
                return true;
            }
        }
    }

    public function hasRole($role)
    {
        if($this->roles()->where('name',$role)->first())
        {
            return true;
        }
        return false;
    }

    public function kidPosts()
    {
        return $this->hasMany(kidPost::class);
    }

    public function seenPosts()
    {
        return $this->hasMany(seenPost::class);
    }

}
