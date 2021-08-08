<?php

namespace App\Entity;

use App\Repository\ForumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ForumRepository::class)
 */
class Forum
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $forum_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forum_desc;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="forums")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $forum_icon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getForumName(): ?string
    {
        return $this->forum_name;
    }

    public function setForumName(string $forum_name): self
    {
        $this->forum_name = $forum_name;

        return $this;
    }

    public function getForumDesc(): ?string
    {
        return $this->forum_desc;
    }

    public function setForumDesc(string $forum_desc): self
    {
        $this->forum_desc = $forum_desc;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getForumIcon(): ?string
    {
        return $this->forum_icon;
    }

    public function setForumIcon(?string $forum_icon): self
    {
        $this->forum_icon = $forum_icon;

        return $this;
    }
}
