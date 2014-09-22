<?php

namespace HireMe\Managers;


class RegisterManagers extends ManagerBase{

    public function getRules()
    {
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password'  => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        return $rules;
    }
} 