<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminProfileModel;
use Domain\Driver\Admin\Object\AdminProfileObject;
use Domain\Driver\Admin\Repository\AdminProfileRepository;

class AdminProfileEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminProfileModel;
    }

    public function object()
    {
        return new AdminProfileObject;
    }

    public function validation()
    {
        return new AdminProfileValidation;
    }

    public function get()
    {
        return new AdminProfileRepository;
    }

    public function save(object | array $input): mixed
    {
        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->user_id) ? : $row->user_id = $input->user_id;
            ! isset($input->email) ? : $row->email = $input->email;
            ! isset($input->name) ? : $row->name = $input->name;
            ! isset($input->surname) ? : $row->surname = $input->surname;
            ! isset($input->phone) ? : $row->phone = $input->phone;
            ! isset($input->address) ? : $row->address = $input->address;

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
