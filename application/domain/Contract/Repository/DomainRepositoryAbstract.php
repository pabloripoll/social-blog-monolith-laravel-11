<?php

namespace Domain\Contract\Repository;

abstract class DomainRepositoryAbstract
{
    /**
     * Domain full/default data transfer object
     */
    public function dto(object | array $result): object | array
    {
        $object = $this->object();

        if (is_array($result) && count($result) > 1) { // || is_object($result))
            $list = [];
            foreach ($result as $row) {
                $list[] = $object->value($row);
            }

            return $list;
        }

        return is_array($result) ? (object) $object->value($result[0]) : $object->value($result);
    }

    /**
     * Single set statement for new entity or updating by id
     */
    public function setById(object $input): mixed
    {
        $validation = $this->object()->isValid($input);

        if ($validation->has_errors) {
            return $validation;
        }

        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            foreach ($this->model()->assignable() as $col) {
                ! isset($input->{$col}) ? : $row->{$col} = trim($this->object()->nomalize($col, $input->{$col}));
            }

            $row->save();

            return $this->dto($row);

        } catch(\Exception $e) {

            return (object) ['error' => json_encode($e->getMessage())];
        }
    }

    /**
     * Single - Delete by "id" column
     */
    public function deleteById(object | array | int $input): mixed
    {
        if (is_object($input)) {
            $validation = $this->object()->isValid($input);

            if ($validation->has_errors) {
                return $validation;
            }
        }

        $input_id = ! is_object($input) ? $input : $input->id;

        try {
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
