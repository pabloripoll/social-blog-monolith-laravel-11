<?php

namespace Domain\Contract\Repository;

interface DomainSetRepositoryInterface
{
    public function model(): object;

    public function object(): object;
}
