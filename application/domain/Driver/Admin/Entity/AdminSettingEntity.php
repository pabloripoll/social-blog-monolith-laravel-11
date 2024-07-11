<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminSettingModel;
use Domain\Driver\Admin\Object\AdminSettingObject;
use Domain\Driver\Admin\Repository\AdminSettingRepository;

class AdminSettingEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminSettingModel;
    }

    public function object()
    {
        return new AdminSettingObject;
    }

    public function get()
    {
        return new AdminSettingRepository;
    }

    public function set(object | array $input): mixed
    {
        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->user_id) ? : $row->user_id = $input->user_id;
            ! isset($input->params) ? : $row->params = $input->params;

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
