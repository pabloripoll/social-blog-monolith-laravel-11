<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminTempTokenModel;
use Domain\Driver\Admin\Object\AdminTempTokenObject;
use Domain\Driver\Admin\Repository\AdminTempTokenRepository;

class AdminTempTokenEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminTempTokenModel;
    }

    public function object()
    {
        return new AdminTempTokenObject;
    }

    public function validation()
    {
        return new AdminTempTokenValidation;
    }

    public function get()
    {
        return new AdminTempTokenRepository;
    }

    public function save(object | array $input): mixed
    {
        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->user_id) ? : $row->user_id = $input->user_id;
            ! isset($input->was_used) ? : $row->was_used = $input->was_used;
            ! isset($input->expires_at) ? : $row->expires_at = $input->expires_at;
            ! isset($input->token) ? : $row->token = $input->token;

            return $row->save();

        } catch(\Exception $e) {

            return ['error' => json_encode($e->getMessage())];
        }
    }

    public function delete(object | int $input): mixed
    {
        try {
            $input_id = ! is_object($input) ? $input : $input->id;

            $row = $this->model()->find($input_id);

            if ($row) {
                $row->delete();
            }

            return ! $row ? true : false;

        } catch(\Exception $e) {

            return ['error' => json_encode($e->getMessage())];
        }
    }

}
