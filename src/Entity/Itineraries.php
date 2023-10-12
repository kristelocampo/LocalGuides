<?php

namespace App\Entity;

use App\Repository\ItinerariesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItinerariesRepository::class)]
class Itineraries
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $created_date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif = null;

    #[ORM\ManyToOne(inversedBy: 'itineraries')]
    private ?Guide $id_guide = null;

    #[ORM\OneToMany(mappedBy: 'id_itinerary', targetEntity: Review::class)]
    private Collection $reviews;

    #[ORM\OneToMany(mappedBy: 'itineraries', targetEntity: Image::class, cascade: ['persist']) ]
    private Collection $id_images;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
        $this->id_images = new ArrayCollection();
    }

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedDate(): ?\DateTimeInterface
    {
        return $this->created_date;
    }

    public function setCreatedDate(\DateTimeInterface $created_date): static
    {
        $this->created_date = $created_date;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(string $tarif): static
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getIdGuide(): ?Guide
    {
        return $this->id_guide;
    }

    public function setIdGuide(?Guide $id_guide): static
    {
        $this->id_guide = $id_guide;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): static
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews->add($review);
            $review->setIdItinerary($this);
        }

        return $this;
    }

    public function removeReview(Review $review): static
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getIdItinerary() === $this) {
                $review->setIdItinerary(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getIdImages(): Collection
    {
        return $this->id_images;
    }

    public function addIdImage(Image $idImage): static
    {
        if (!$this->id_images->contains($idImage)) {
            $this->id_images->add($idImage);
            $idImage->setItineraries($this);
        }

        return $this;
    }

    public function removeIdImage(Image $idImage): static
    {
        if ($this->id_images->removeElement($idImage)) {
            // set the owning side to null (unless already changed)
            if ($idImage->getItineraries() === $this) {
                $idImage->setItineraries(null);
            }
        }

        return $this;
    }
}
