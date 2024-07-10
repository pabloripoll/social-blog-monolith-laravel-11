<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberSettingModel;
use Domain\Driver\Member\Object\MemberSettingObject;
use Domain\Driver\Member\Repository\MemberSettingRepository;

class MemberSettingEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberSettingModel;
    }

    public function object()
    {
        return new MemberSettingObject;
    }

    public function get()
    {
        return new MemberSettingRepository;
    }

    public function save(object | array $input): mixed
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
