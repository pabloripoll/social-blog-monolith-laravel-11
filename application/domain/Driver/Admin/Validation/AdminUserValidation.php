<?php

namespace Domain\Driver\Admin\Validation;

use Domain\Contract\Validation\DomainValidationAbstract;

/**
 * Entity properties validation
 *
 * Methods valid output value must be clean as input value
 */
class AdminUserValidation extends DomainValidationAbstract
{
    public function id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function pid($value)
    {
        return $this->_val()->id($value, [10, 20]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_active($value)
    {
        return $this->_val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_banned($value)
    {
        return $this->_val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function banned_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function signature($value)
    {
        return $this->_val()->email($value, [8, 64]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function alias($value)
    {
        return $this->_val()->alias($value, [4, 16]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function password($value)
    {
        return $this->_val()->naming($value, [8, 128]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function created_by_user_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

}
