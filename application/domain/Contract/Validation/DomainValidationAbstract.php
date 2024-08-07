<?php

namespace Domain\Contract\Validation;

use App\Http\Controllers\Validator\ValidatorController;

abstract class DomainValidationAbstract
{
    /**
     * Error register property
     */
    public $error = [];

    /**
     * Get errors register
     */
    public function errors(): array
    {
        return $this->error;
    }

    /**
     * Validation service from infrastructure
     */
    protected function val()
    {
        return new ValidatorController;
    }

}
