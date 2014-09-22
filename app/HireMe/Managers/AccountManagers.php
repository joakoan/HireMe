<?php

namespace HireMe\Managers;


class AccountManagers extends ManagerBase{

    public function getRules()
    {
        $rules = [
            'full_name' => 'required',
            'email'     => 'email|unique:users,email,' . $this->entity->id,
            'password'  => 'confirmed',
            'password_confirmation' => ''
        ];
        return $rules;
    }
} 