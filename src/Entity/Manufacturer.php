<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/** a manufacturer
 * @ORM\Entity
 */
#[ApiResource]
class Manufacturer
{
    /**
     * id of the manufacturer
     * @ORM\Id
     * @ORM\GeneratedValue
     * @Column(type="integer")
     */
    private ?int $id = null;

    /** name of the manufacturer
     * @ORM\Column
     */
    private string $name = '';

    /** description of manufacturer
     * @ORM\Column(type="text")
     */
    private string $description = '';

    /** country code of manufacturer
     * @ORM\Column(length=3)
     */
    private string $countryCode = '';

    /** date that manufacturer was listed
     * @ORM\Column(type="datetime")
     */
    private ?\DateTimeInterface $listedDate = null;

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


}