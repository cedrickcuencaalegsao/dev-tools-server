<?php

namespace App\Application\Tools;

use App\Domain\Tools\ToolsRepository;
use App\Domain\Tools\Tools;

class RegisterTools
{
    private ToolsRepository $toolsRepository;
    public function __construct(ToolsRepository $toolsRepository)
    {
        $this->toolsRepository = $toolsRepository;
    }
    public function create(int $id, string $name, string $category, string $language)
    {
        $data = new Tools($id, $name, $category, $language);
        $this->toolsRepository->create($data);
    }
    public function update(int $id, string $name, string $category, string $language)
    {
        $validate = $this->toolsRepository->findByID($id);
        if (!$validate) {
            throw new \Exception('Tools not found!');
        }
        $updateTools = new Tools(
            id: $id,
            name: $name,
            category: $category,
            language: $language,
        );
        $this->toolsRepository->update($updateTools);
    }
    public function findByID(int $id)
    {
        return $this->toolsRepository->findByID($id);
    }
    public function findAll()
    {
        return $this->toolsRepository->findAll();
    }
    public function searchTools(string $searchTerm): array
    {
        $result = $this->toolsRepository->searchByTerm($searchTerm);

        return [
            'exactMatch' => $result['exactMatch'] ? $result['exactMatch']->toArray() : null,
            'relatedItems' => array_map(function ($tool) {
                return $tool->toArray();
            }, $result['relatedItems'])
        ];
    }
    public function getToolsOrderedByClickCount(): array
    {
        return $this->toolsRepository->getAllOrderedByClickCount();
    }
    public function updateClickCount(int $id)
    {
        // Find the tool
        $tool = $this->toolsRepository->findByID($id);
        if (!$tool) {
            throw new \Exception('Tool Not Found.');
        }

        // Increment the click count
        $tool->incrementClickCount();

        // Update the click count in the repository
        $this->toolsRepository->updateClickCount($tool->getId(), $tool->getClickCount());
    }
    public function getLatest()
    {
        return $this->toolsRepository->getLatest();
    }
    public function getOldest()
    {
        return $this->toolsRepository->getOldest();
    }
    public function getAtoZ()
    {
        return $this->toolsRepository->getAtoZ();
    }
    public function getZtoA()
    {
        return $this->toolsRepository->getZtoA();
    }
}
