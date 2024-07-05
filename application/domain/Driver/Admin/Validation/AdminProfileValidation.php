<?php

namespace Domain\Driver\Admin\Validation;

use Domain\Contract\Validation\DomainValidationAbstract;

/**
 * Entity properties validation
 *
 * Methods valid output value must be clean as input value
 */
class AdminProfileValidation extends DomainValidationAbstract
{
    public function id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function user_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function email($value)
    {
        return $this->_val()->text($value, [12, 64]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function name($value)
    {
        return $this->_val()->text($value, [2, 64]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function surname($value)
    {
        return $this->_val()->text($value, [0, 64]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function phone($value)
    {
        return $this->_val()->text($value, [0, 32]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function address($value)
    {
        return $this->_val()->text($value, [0, 128]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

}
