<?php

namespace App\Domain\Tools;

class Tools
{
    private int $id;
    private ?string $name;
    private ?string $category;
    private ?string $language;
    private ?string $description;
    private ?string $documentationURL;
    private ?string $image;
    private ?string $created_at;
    private ?string $updated_at;

    public function __construct(
        ?int $id = null,
        ?string $name = null,
        ?string $category = null,
        ?string $language = null,
        ?string $description = null,
        ?string $documentationURL = null,
        ?string $image = null,
        ?string $created_at = null,
        ?string $updated_at = null,
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->language = $language;
        $this->description = $description;
        $this->documentationURL = $documentationURL;
        $this->image = $image;
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
            'documentationURL' => $this->documentationURL,
            'image'=> $this->image,
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
    public function getDocumentation()
    {
        return $this->description;
    }
    public function getDocumentationURL()
    {
        return $this->documentationURL;
    }
    public function created()
    {
        return $this->created_at;
    }
    public function updated()
    {
        return $this->updated_at;
    }
}
