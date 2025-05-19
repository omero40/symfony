<?php

namespace App\Entity;

use App\Repository\HelloWorldRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HelloWorldRepository::class)]
class HelloWorld
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $omer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->omer;
    }

    public function setTitle(string $title): static
    {
        $this->omer = $title;

        return $this;
    }
}
