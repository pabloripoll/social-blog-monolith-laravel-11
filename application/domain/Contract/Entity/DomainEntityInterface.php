<?php

namespace Domain\Contract\Entity;

interface DomainEntityInterface
{
    public function model();

    public function object();

    public function get();

    public function save(object | array $input): mixed;

    //public function delete(object | int $input): mixed;

}