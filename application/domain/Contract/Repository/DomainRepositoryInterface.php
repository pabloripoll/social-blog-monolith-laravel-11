<?php

namespace Domain\Contract\Repository;

interface DomainRepositoryInterface
{
    public function model(): object;

    public function object(): object;
}
