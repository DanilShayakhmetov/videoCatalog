<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatalogTab
 *
 * @ORM\Table(name="catalog_tab")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CatalogTabRepository")
 */
class CatalogTab
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="listHash", type="string", length=255, unique=true)
     */
    private $listHash;

    /**
     * @var string
     *
     * @ORM\Column(name="listName", type="string", length=255, unique=true)
     */
    private $listName;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set listHash.
     *
     * @param string $listHash
     *
     * @return CatalogTab
     */
    public function setListHash($listHash)
    {
        $this->listHash = $listHash;

        return $this;
    }

    /**
     * Get listHash.
     *
     * @return string
     */
    public function getListHash()
    {
        return $this->listHash;
    }

    /**
     * Set listName.
     *
     * @param string $listName
     *
     * @return CatalogTab
     */
    public function setListName($listName)
    {
        $this->listName = $listName;

        return $this;
    }

    /**
     * Get listName.
     *
     * @return string
     */
    public function getListName()
    {
        return $this->listName;
    }
}
