<?php

namespace App\Entity;

use App\Repository\GuideRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GuideRepository::class)]
class Guide
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $bio = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?User $user_id = null;

    #[ORM\OneToMany(mappedBy: 'id_guide', targetEntity: Itineraries::class)]
    private Collection $itineraries;

    #[ORM\OneToMany(mappedBy: 'id_guide', targetEntity: Article::class)]
    private Collection $articles;

    #[ORM\Column(length: 255)]
    private ?string $telNumber = null;

    #[ORM\ManyToMany(targetEntity: Language::class, inversedBy: 'guides')]
    private Collection $languages;

    #[ORM\ManyToOne(inversedBy: 'guides')]
    private ?Location $id_location = null;


    public function __construct()
    {
        $this->itineraries = new ArrayCollection();
        $this->articles = new ArrayCollection();
        $this->languages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(string $bio): static
    {
        $this->bio = $bio;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return Collection<int, Itineraries>
     */
    public function getItineraries(): Collection
    {
        return $this->itineraries;
    }

    public function addItinerary(Itineraries $itinerary): static
    {
        if (!$this->itineraries->contains($itinerary)) {
            $this->itineraries->add($itinerary);
            $itinerary->setIdGuide($this);
        }

        return $this;
    }

    public function removeItinerary(Itineraries $itinerary): static
    {
        if ($this->itineraries->removeElement($itinerary)) {
            // set the owning side to null (unless already changed)
            if ($itinerary->getIdGuide() === $this) {
                $itinerary->setIdGuide(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): static
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->setIdGuide($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): static
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getIdGuide() === $this) {
                $article->setIdGuide(null);
            }
        }

        return $this;
    }

    public function getTelNumber(): ?string
    {
        return $this->telNumber;
    }

    public function setTelNumber(string $telNumber): static
    {
        $this->telNumber = $telNumber;

        return $this;
    }

    /**
     * @return Collection<int, Language>
     */
    public function getLanguage(): Collection
    {
        return $this->languages;
    }

    public function addLanguage(Language $languages): static
    {
        if (!$this->languages->contains($languages)) {
            $this->languages->add($languages);
        }

        return $this;
    }

    public function removeLanguage(Language $languages): static
    {
        $this->languages->removeElement($languages);

        return $this;
    }

    public function getLanguages(): Collection
    {
        return $this->languages;
    }

    public function getIdLocation(): ?Location
    {
        return $this->id_location;
    }

    public function setIdLocation(?Location $id_location): static
    {
        $this->id_location = $id_location;

        return $this;
    }

}
