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
        $toolsModel->documentation = $tools->getDescription();
        $toolsModel->documentation_url = $tools->getDocumentationURL();
        $toolsModel->image = $tools->getImage();
        $toolsModel->created_at = $tools->created();
        $toolsModel->update_at = $tools->updated();
        $toolsModel->save();
    }
    public function update(Tools $tools): void
    {
        $toolsModel =  ToolsModel::find($tools->getId()) ?? new ToolsModel();
        $toolsModel->id = $tools->getId();
        $toolsModel->name = $tools->getName();
        $toolsModel->category = $tools->getCategory();
        $toolsModel->language = $tools->getLanguage();
        $toolsModel->documentation = $tools->getDescription();
        $toolsModel->documentation_url = $tools->getDocumentationURL();
        $toolsModel->image = $tools->getImage();
        $toolsModel->created_at = $tools->created();
        $toolsModel->update_at = $tools->updated();
        $toolsModel->save();
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
            $toolsModel->description,
            $toolsModel->documentation_url,
            $toolsModel->image,
            $toolsModel->created_at,
            $toolsModel->updated_at,
        );
    }
    public function findAll(): array
    {
        return ToolsModel::all()->map(function ($tool) {
            return new Tools(
                $tool->id,
                $tool->name,
                $tool->category,
                $tool->language,
                $tool->description,
                $tool->documentation_url,
                $tool->image,
                
                $tool->created_at,
                $tool->updated_at
            );
        })->toArray();
    }
    public function searchByTerm(string $serachTerm): array
    {
        $exactMatch = ToolsModel::where('name', $serachTerm)->orWhere('description', $serachTerm)->orWhere('language', $serachTerm)->orWhere('category', $serachTerm)->first();

        $relatedItems = ToolsModel::where('id', '!=', $exactMatch?->id)->where(
            function ($query) use ($serachTerm) {
                $query->where('name', 'LIKE', "%{$serachTerm}%")
                    ->orWhere('description', 'LIKE', "%{$serachTerm}%")
                    ->orWhere('language', 'LIKE', "%{$serachTerm}%")
                    ->orWhere('category', 'LIKE', "%{$serachTerm}%");
            }
        )->get();

        return [
            'exactMatch' => $exactMatch ? new Tools(
                $exactMatch->id,
                $exactMatch->name,
                $exactMatch->category,
                $exactMatch->language,
                $exactMatch->description,
                $exactMatch->documentation_url,
                $exactMatch->image,
                $exactMatch->created_at,
                $exactMatch->updated_at,
            ) : null,
            'relatedItems' => $relatedItems->map(function ($tools) {
                return new Tools(
                    $tools->id,
                    $tools->name,
                    $tools->category,
                    $tools->language,
                    $tools->description,
                    $tools->documentation_url,
                    $tools->image,
                    $tools->created_at,
                    $tools->updated_at,
                );
            })->toArray()
        ];
    }
}
