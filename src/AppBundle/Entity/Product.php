<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="refId", type="string", length=20)
     */
    private $refId;


    /**
     * @var string
     *
     * @ORM\Column(name="codereference", type="string", length=20, nullable=true)
     */
    private $codereference;

    /**
     * @var string
     *
     * @ORM\Column(name="articleid", type="string", length=20, nullable=true)
     */
    private $articleid;

    /**
     * @var string
     *
     * @ORM\Column(name="codesku", type="string", length=20, nullable=true)
     */
    private $codesku;

    /**
     * @var string
     *
     * @ORM\Column(name="kititem", type="string", nullable=true)
     */
    private $kititem;

    /**
     * @var string
     *
     * @ORM\Column(name="declinedproduct", type="string", length=20, nullable=true)
     */
    private $declinedproduct;

    /**
     * @var string
     *
     * @ORM\Column(name="indexindeclinedproduct", type="string", length=20, nullable=true)
     */
    private $indexindeclinedproduct;

    /**
     * @var string
     *
     * @ORM\Column(name="axe1", type="string", length=20, nullable=true)
     */
    private $axe1;

    /**
     * @var string
     *
     * @ORM\Column(name="axe2", type="string", length=20, nullable=true)
     */
    private $axe2;

    /**
     * @var string
     *
     * @ORM\Column(name="axe3", type="string", length=20, nullable=true)
     */
    private $axe3;

    /**
     * @var string
     *
     * @ORM\Column(name="labelforurl", type="string", length=20, nullable=true)
     */
    private $labelforurl;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=20, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="colororder", type="string", length=20, nullable=true)
     */
    private $colororder;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=20, nullable=true)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="sizeorder", type="string", length=20, nullable=true)
     */
    private $sizeorder;

    /**
     * @var string
     *
     * @ORM\Column(name="codeean", type="string", length=20, nullable=true)
     */
    private $codeean;

    /**
     * @var string
     *
     * @ORM\Column(name="accessfilter", type="string", length=20, nullable=true)
     */
    private $accessfilter;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryid", type="string", length=20, nullable=true)
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=20, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="productype", type="string", length=20, nullable=true)
     */
    private $producttype;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=20, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="marketingprogram", type="string", length=20, nullable=true)
     */
    private $marketingprogram;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=20, nullable=true)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="season", type="string", length=20, nullable=true)
     */
    private $season;

    /**
     * @var string
     *
     * @ORM\Column(name="openedkititem", type="string", length=20, nullable=true)
     */
    private $openedkititem;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Product
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set refId
     *
     * @param string $refId
     *
     * @return Product
     */
    public function setRefId($refId)
    {
        $this->refId = $refId;

        return $this;
    }

    /**
     * Get refId
     *
     * @return string
     */
    public function getRefId()
    {
        return $this->refId;
    }

    /**
     * Set codereference
     *
     * @param string $codereference
     *
     * @return Product
     */
    public function setCodereference($codereference)
    {
        $this->codereference = $codereference;

        return $this;
    }

    /**
     * Get codereference
     *
     * @return string
     */
    public function getCodereference()
    {
        return $this->codereference;
    }

    /**
     * Set articleid
     *
     * @param string $articleid
     *
     * @return Product
     */
    public function setArticleid($articleid)
    {
        $this->articleid = $articleid;

        return $this;
    }

    /**
     * Get articleid
     *
     * @return string
     */
    public function getArticleid()
    {
        return $this->articleid;
    }

    /**
     * Set codesku
     *
     * @param string $codesku
     *
     * @return Product
     */
    public function setCodesku($codesku)
    {
        $this->codesku = $codesku;

        return $this;
    }

    /**
     * Get codesku
     *
     * @return string
     */
    public function getCodesku()
    {
        return $this->codesku;
    }

    /**
     * Set kititem
     *
     * @param string $kititem
     *
     * @return Product
     */
    public function setKititem($kititem)
    {
        $this->kititem = $kititem;

        return $this;
    }

    /**
     * Get kititem
     *
     * @return string
     */
    public function getKititem()
    {
        return $this->kititem;
    }

    /**
     * Set declinedproduct
     *
     * @param string $declinedproduct
     *
     * @return Product
     */
    public function setDeclinedproduct($declinedproduct)
    {
        $this->declinedproduct = $declinedproduct;

        return $this;
    }

    /**
     * Get declinedproduct
     *
     * @return string
     */
    public function getDeclinedproduct()
    {
        return $this->declinedproduct;
    }

    /**
     * Set indexindeclinedproduct
     *
     * @param string $indexindeclinedproduct
     *
     * @return Product
     */
    public function setIndexindeclinedproduct($indexindeclinedproduct)
    {
        $this->indexindeclinedproduct = $indexindeclinedproduct;

        return $this;
    }

    /**
     * Get indexindeclinedproduct
     *
     * @return string
     */
    public function getIndexindeclinedproduct()
    {
        return $this->indexindeclinedproduct;
    }

    /**
     * Set axe1
     *
     * @param string $axe1
     *
     * @return Product
     */
    public function setAxe1($axe1)
    {
        $this->axe1 = $axe1;

        return $this;
    }

    /**
     * Get axe1
     *
     * @return string
     */
    public function getAxe1()
    {
        return $this->axe1;
    }

    /**
     * Set axe2
     *
     * @param string $axe2
     *
     * @return Product
     */
    public function setAxe2($axe2)
    {
        $this->axe2 = $axe2;

        return $this;
    }

    /**
     * Get axe2
     *
     * @return string
     */
    public function getAxe2()
    {
        return $this->axe2;
    }

    /**
     * Set axe3
     *
     * @param string $axe3
     *
     * @return Product
     */
    public function setAxe3($axe3)
    {
        $this->axe3 = $axe3;

        return $this;
    }

    /**
     * Get axe3
     *
     * @return string
     */
    public function getAxe3()
    {
        return $this->axe3;
    }

    /**
     * Set labelforurl
     *
     * @param string $labelforurl
     *
     * @return Product
     */
    public function setLabelforurl($labelforurl)
    {
        $this->labelforurl = $labelforurl;

        return $this;
    }

    /**
     * Get labelforurl
     *
     * @return string
     */
    public function getLabelforurl()
    {
        return $this->labelforurl;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Product
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set colororder
     *
     * @param string $colororder
     *
     * @return Product
     */
    public function setColororder($colororder)
    {
        $this->colororder = $colororder;

        return $this;
    }

    /**
     * Get colororder
     *
     * @return string
     */
    public function getColororder()
    {
        return $this->colororder;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return Product
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set sizeorder
     *
     * @param string $sizeorder
     *
     * @return Product
     */
    public function setSizeorder($sizeorder)
    {
        $this->sizeorder = $sizeorder;

        return $this;
    }

    /**
     * Get sizeorder
     *
     * @return string
     */
    public function getSizeorder()
    {
        return $this->sizeorder;
    }

    /**
     * Set codeean
     *
     * @param string $codeean
     *
     * @return Product
     */
    public function setCodeean($codeean)
    {
        $this->codeean = $codeean;

        return $this;
    }

    /**
     * Get codeean
     *
     * @return string
     */
    public function getCodeean()
    {
        return $this->codeean;
    }

    /**
     * Set accessfilter
     *
     * @param string $accessfilter
     *
     * @return Product
     */
    public function setAccessfilter($accessfilter)
    {
        $this->accessfilter = $accessfilter;

        return $this;
    }

    /**
     * Get accessfilter
     *
     * @return string
     */
    public function getAccessfilter()
    {
        return $this->accessfilter;
    }

    /**
     * Set categoryid
     *
     * @param string $categoryid
     *
     * @return Product
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return string
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set producttype
     *
     * @param string $producttype
     *
     * @return Product
     */
    public function setProducttype($producttype)
    {
        $this->producttype = $producttype;

        return $this;
    }

    /**
     * Get producttype
     *
     * @return string
     */
    public function getProducttype()
    {
        return $this->producttype;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Product
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set marketingprogram
     *
     * @param string $marketingprogram
     *
     * @return Product
     */
    public function setMarketingprogram($marketingprogram)
    {
        $this->marketingprogram = $marketingprogram;

        return $this;
    }

    /**
     * Get marketingprogram
     *
     * @return string
     */
    public function getMarketingprogram()
    {
        return $this->marketingprogram;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Product
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set season
     *
     * @param string $season
     *
     * @return Product
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set openedkititem
     *
     * @param string $openedkititem
     *
     * @return Product
     */
    public function setOpenedkititem($openedkititem)
    {
        $this->openedkititem = $openedkititem;

        return $this;
    }

    /**
     * Get openedkititem
     *
     * @return string
     */
    public function getOpenedkititem()
    {
        return $this->openedkititem;
    }
}
