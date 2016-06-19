<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Log;

class User extends Authenticatable
{
    // ToDo: This needs to checked to remove the below SoftDelete comment once the traits clash is fixed.
//    use SoftDeletes;
    use EntrustUserTrait; // Entrust Package requires this trait

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'created_by', 'updated_by'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdministrator()
    {
        return true;
    }

    /**
     * Get a List of roles ids associated with the current user.
     *
     * @return array
     */
    public function getRoleListAttribute()
    {
        return $this->roles->lists('id')->all();
    }

    /**
     * Many-to-Many relations with Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
//    public function roles()
//    {
//        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
//    }
//
//    public function isAdministrator()
//    {
//        $roles = $this->roles;
//        if ($roles->count() == 0) {
//            Log::error('User has no roles (this should never happen) : '.$this);
//            return false;
//        }
//
//        foreach($roles as $role) {  // Since this roles() return a collection
//            Log::info('Role: ', $role->toArray());
//            if ($role->id == 1) {   // Administrator will have id == 1. Seeded data.
//                return true;
//            }
//        }
//        return false;
//    }
//
//    public function hasRole($rolename)
//    {
//        $roles = $this->roles;
//        if ($roles->count() == 0) {
//            Log::error('User has no roles (this should never happen) : '.$this);
//            return false;
//        }
//
//        foreach($roles as $role) {
//            Log::info('Role: ', $role->toArray());
//            if ($role->name == $rolename) {
//                return true;
//            }
//        }
//        return false;
//    }

    public function isActive()
    {
        return $this->active;
    }
}
