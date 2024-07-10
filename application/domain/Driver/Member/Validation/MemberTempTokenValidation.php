<?php

namespace Domain\Driver\Member\Validation;

use Domain\Contract\Validation\DomainValidationAbstract;

/**
 * Entity properties validation
 *
 * Methods valid output value must be clean as input value
 */
class MemberTempTokenValidation extends DomainValidationAbstract
{
    public function id($value)
    {
        return $this->val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function user_id($value)
    {
        return $this->val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function was_used($value)
    {
        return $this->val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function expires_at($value)
    {
        return $this->val()->datetime($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function token($value)
    {
        return $this->val()->text($value, [64, 64]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

}
