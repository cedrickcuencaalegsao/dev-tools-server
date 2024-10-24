<?php

namespace App\Domain\Tools;

class Tools
{
    private int $id;
    private ?string $name;
    private ?string $category;
    private ?string $language;
    private ?string $description;
    private ?string $documentation_url;
    private ?string $image;
    private ?int $clickCount;
    private ?string $created_at;
    private ?string $updated_at;

    public function __construct(
        ?int $id = null,
        ?string $name = null,
        ?string $category = null,
        ?string $language = null,
        ?string $description = null,
        ?string $documentation_url = null,
        ?string $image = null,
        ?int $clickCount = null,
        ?string $created_at = null,
        ?string $updated_at = null,
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->language = $language;
        $this->description = $description;
        $this->documentation_url = $documentation_url;
        $this->image = $image;
        $this->clickCount = $clickCount;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'language' => $this->language,
            'description' => $this->description,
            'documentationURL' => $this->documentation_url,
            'image' => $this->image,
            'clickCount' => $this->clickCount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
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
    public function getDescription()
    {
        return $this->description;
    }
    public function getDocumentationURL()
    {
        return $this->documentation_url;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getClickCount()
    {
        return $this->clickCount;
    }
    public function created()
    {
        return $this->created_at;
    }
    public function updated()
    {
        return $this->updated_at;
    }
    public function incrementClickCount(): void
    {
        $this->clickCount++;
    }
}
