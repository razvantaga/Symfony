<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\MovieRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 20,
        minMessage: 'The title must be at least {{ limit }} characters long',
        maxMessage: 'The title cannot be longer than {{ limit }} characters'
    )]
    private ?string $title = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    #[Assert\Range(
        min: 1888,
        max: 2100,
        notInRangeMessage: 'Release year must be between {{ min }} and {{ max }}',
    )]
    private ?int $releaseYear = null;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: 'The description must be at least {{ limit }} characters long',
        maxMessage: 'The description cannot be longer than {{ limit }} characters'
    )]
    private ?string $description = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $imagePath = null;

    // Getters and setters...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getReleaseYear(): ?int
    {
        return $this->releaseYear;
    }

    public function setReleaseYear(?int $releaseYear): self
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): self
    {
        $this->imagePath = $imagePath;

        return $this;
    }
}
