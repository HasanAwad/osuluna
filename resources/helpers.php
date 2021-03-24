<?php

if(!function_exists('hasPermission')){
    function hasPermission($permissionName){
        if(auth()->guard('admins')->check()) {

            $user = \App\Admin::where('id', auth()->guard('admins')->user()->id)->with('role.permissions')->first();
            $permission = \App\AdminPermissions::where('name', $permissionName)->first();
            return response()->json($user->role->permissions->contains($permission));

        } else if(auth()->guard('api')->check()){

            $user = \App\User::where('id', auth()->guard('api')->user()->id)->with('role.permissions')->first();
            $permission = \App\UserPermissions::where('name', $permissionName)->first();
            return response()->json($user->role->permissions->contains($permission));

        } else {

            return 'Unauthenticated';
        }
    }
}
