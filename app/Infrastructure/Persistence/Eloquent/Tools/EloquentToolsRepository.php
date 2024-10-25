<?php

namespace App\Infrastructure\Persistence\Eloquent\Tools;

use App\Domain\Tools\ToolsRepository;
use App\Domain\Tools\Tools;


class EloquentToolsRepository implements ToolsRepository
{
    /**
     * Add tools.
     **/
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
    /**
     * Update Tool.
     **/
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
    /**
     * Find Tool by id.
     **/
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
            $toolsModel->clickCount,
            $toolsModel->created_at,
            $toolsModel->updated_at,
        );
    }
    /**
     * Find all Tool.
     **/
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
                $tool->clickCount,
                $tool->created_at,
                $tool->updated_at
            );
        })->toArray();
    }
    /**
     * Search Tool and any term.
     **/
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
                $exactMatch->clickCount,
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
                    $tools->clickCount,
                    $tools->created_at,
                    $tools->updated_at,
                );
            })->toArray()
        ];
    }
    /**
     * Get Tool by click count use to return on trending section.
     **/
    public function getAllOrderedByClickCount(): array
    {
        return ToolsModel::where('clickCount', '>=', 50)
            ->orderBy('clickCount', 'desc')
            ->get()
            ->toArray();
    }
    /**
     * Update Click Counts that will be base the number of clicks, and use in trending tools.
     **/
    public function updateClickCount(int $id, int $clickCount): void
    {
        $toolModel = ToolsModel::where('id', $id)->first();
        if ($toolModel) {
            $toolModel->clickCount = $clickCount; // Make sure this is an integer
            $toolModel->save();
        } else {
            throw new \Exception('Tool Not Found!');
        }
    }
    /**
     * Get latest.
     **/
    public function getLatest(): array
    {
        return ToolsModel::orderBy('created_at', 'desc')->get()->toArray();
    }
    /**
     * Get ordest.
     **/
    public function getOldest(): array
    {
        return ToolsModel::orderBy('created_at', 'asc')->get()->toArray();
    }
    /**
     * Get A to Z.
     **/
    public function getAtoZ(): array
    {
        return ToolsModel::orderBy('name', 'asc')->get()->toArray();
    }
    /**
     * Get Z to A.
     **/
    public function getZtoA(): array
    {
        return ToolsModel::orderBy('name', 'desc')->get()->toArray();
    }
}
