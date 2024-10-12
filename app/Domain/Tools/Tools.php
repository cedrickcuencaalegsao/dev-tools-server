<?php

namespace App\Domain\Tools;

class Tools
{
    private int $id;
    private string $name;
    private string $category;
    private string $language;

    public function __construct(int $id, string $name, string $category, string $language)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->language = $language;
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'language' => $this->language,
        ];
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getLanguage()
    {
        return $this->language;
    }
}
