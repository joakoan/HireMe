<?php
/**
 * Created by PhpStorm.
 * User: Joaquin
 * Date: 21-09-14
 * Time: 11:05 PM
 */

namespace HireMe\Managers;


class ValidationException extends \Exception {

    protected $errors;

    public function __construct($message, $errors)
    {
        $this->errors = $errors;
        parent::__construct($message);
    }

    public function getErrors()
    {
        return $this->errors;
    }

}