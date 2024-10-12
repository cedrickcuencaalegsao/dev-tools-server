<?php

namespace App\Infrastructure\Persistence\Eloquent\Tools;

use App\Domain\Tools\ToolsRepository;
use App\Domain\Tools\Tools;


class EloquentToolsRepository implements ToolsRepository
{
    public function create(Tools $tools): void
    {
        $toolsModel =  ToolsModel::find($tools->getId()) ?? new ToolsModel();
        $toolsModel->id = $tools->getId();
        $toolsModel->name = $tools->getName();
        $toolsModel->category = $tools->getCategory();
        $toolsModel->language = $tools->getLanguage();
    }
    public function update(Tools $tools): void
    {
        $toolsModel =  ToolsModel::find($tools->getId()) ?? new ToolsModel();
        $toolsModel->id = $tools->getId();
        $toolsModel->name = $tools->getName();
        $toolsModel->category = $tools->getCategory();
        $toolsModel->language = $tools->getLanguage();
    }
    public function findByID(int $id): ?Tools
    {
        $toolsModel =  ToolsModel::find($id);
        if (!$toolsModel) {
            return null;
        }
        return new Tools(
            $toolsModel->id,
            $toolsModel->name,
            $toolsModel->category,
            $toolsModel->language,
        );
    }
    public function findAll(): array
    {
        return ToolsModel::all()->map(fn($toolsModel) => new Tools(
            id: $toolsModel->id,
            name: $toolsModel->name,
            category: $toolsModel->category,
            language: $toolsModel->language,
        ))->toArray();
    }
}
