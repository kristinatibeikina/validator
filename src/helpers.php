<?php
namespace Validators;


use Validator\Validator;

function validators(array $array = []): Validator
{
    return new Validator($array);
}
