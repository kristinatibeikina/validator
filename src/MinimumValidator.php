<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class MinimumValidator extends AbstractValidator
{

    protected string $message = 'Field :минимальный размер';

    public function rule(): bool
    {
        return ($this->value)>8;
    }
}
