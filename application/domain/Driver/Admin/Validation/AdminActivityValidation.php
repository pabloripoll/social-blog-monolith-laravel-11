<?php

namespace Domain\Driver\Admin\Validation;

use Domain\Contract\Validation\DomainValidationAbstract;

/**
 * Entity properties validation
 *
 * Methods valid output value must be clean as input value
 */
class AdminActivityValidation extends DomainValidationAbstract
{
    public function id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function user_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function category_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function source_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function source_pid($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function source_ref($value)
    {
        return $this->_val()->text($value, [0, 64]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function source_url($value)
    {
        return $this->_val()->text($value, [0, 255]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

}
