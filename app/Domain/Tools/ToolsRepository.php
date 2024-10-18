<?php

namespace App\Domain\Tools;

interface ToolsRepository
{
    public function create(Tools $tools): void;
    public function update(Tools $tools): void;
    public function findByID(int $id): ?Tools;
    public function findAll(): array;
}
