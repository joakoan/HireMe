<?php

namespace HireMe\Managers;


class ProfileManagers extends ManagerBase{

    public function getRules()
    {
        $rules = [
            'website_url' => 'required|url',
            'description' => 'required|max:1000',
            'job_type'    => 'required',
            'category_id' => 'required|exists:categories,id',
            'available'   => 'in:1,0'


        ];
        return $rules;
    }

    public function prepareData($data)
    {
        if(! isset ($data['available']))
        {
            $data['available'] = 0;
        }
        return $data;
    }
} 