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
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $life = null;

    #[ORM\Column(length: 255)]
    private ?string $maxserv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getLife(): ?string
    {
        return $this->life;
    }

    public function setLife(string $life): static
    {
        $this->life = $life;

        return $this;
    }

    public function getWork(): ?string
    {
        return $this->maxserv;
    }

    public function setWork(string $work): static
    {
        $this->maxserv = $work;

        return $this;
    }
}
