<?php

namespace App\Domain\Tools;

interface ToolsRepository
{
    public function create(Tools $tools): void;
    public function update(Tools $tools): void;
    public function findByID(int $id): ?Tools;
    public function findAll(): array;
    public function searchByTerm(string $serachTerm): array;
    public function getAllOrderedByClickCount(): array;
    public function updateClickCount(int $id, int $ClickCount): void;
}
