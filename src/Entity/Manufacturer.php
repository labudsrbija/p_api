<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** a manufacturer
 * @ORM\Entity
 */
#[ApiResource(
    collectionOperations: ['get', 'post'],
    itemOperations: ['get', 'put', 'patch']
)]
class Manufacturer
{
    /**
     * id of the manufacturer
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column Column(type="integer")
     */
    private ?int $id = null;

    /** name of the manufacturer
     * @ORM\Column
     */
    #[Assert\NotBlank]
    private string $name = '';

    /** description of manufacturer
     * @ORM\Column(type="text")
     */
    #[Assert\NotBlank]
    private string $description = '';

    /** country code of manufacturer
     * @ORM\Column(length=3)
     */

    #[Assert\NotBlank]
    private string $countryCode = '';

    /** date that manufacturer was listed
     * @ORM\Column(type="datetime")
     */
    #[Assert\NotNull]
    private ?\DateTimeInterface $listedDate = null;

    /**
     * @var Product[] Available products from this manufacturer
     * @ORM\OneToMany(targetEntity="Product", mappedBy="manufacturer", cascade={"persist", "remove"})
     */
    private iterable $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getListedDate(): ?\DateTimeInterface
    {
        return $this->listedDate;
    }

    /**
     * @param \DateTimeInterface|null $listedDate
     */
    public function setListedDate(?\DateTimeInterface $listedDate): void
    {
        $this->listedDate = $listedDate;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): iterable|ArrayCollection
    {
        return $this->products;
    }


}