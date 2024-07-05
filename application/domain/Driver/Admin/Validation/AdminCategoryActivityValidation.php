<?php

namespace Domain\Driver\Admin\Validation;

use Domain\Contract\Validation\DomainValidationAbstract;

/**
 * Entity properties validation
 *
 * Returns the same value as input value if it is valid
 */
class AdminCategoryActivityValidation extends DomainValidationAbstract
{
    public function id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function title($value)
    {
        return $this->_val()->char($value, [4, 128]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function description($value)
    {
        return $this->_val()->text($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function created_by_user_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }
}
