<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Book;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
trait BookTrait
{
    /*
     * @var string
     */
    protected $slug;
    
    /*
     * @var string
     */
    protected $ean;
    
    /*
     * @var string
     */
    protected $isbn;
    
    /*
     * @var string
     */
    protected $category;
    
    /*
     * @var string
     */
    protected $name;
    
    /*
     * @var string
     */
    protected $description;
    
    /*
     * @var string
     */
    protected $shortDescription;
    
    /*
     * @var string
     */
    protected $series;
    
    /*
     * @var int
     */
    protected $cover;
    
    /*
     * @var datetime
     */
    protected $premiere;
    
    /*
     * @var int
     */
    protected $releaseYear;
    
    /*
     * @var int
     */
    protected $releaseNumber;
    
    /*
     * @var int
     */
    protected $pages;
    
    /*
     * @var string
     */
    protected $dimensions;
    
    /*
     * @var float
     */
    protected $price;
    
    /*
     * @var string
     */
    protected $imagePath;
    
    /*
     * @var array
     */
    protected $authors;
    
    /*
     * @var PublisherInterface
     */
    protected $publisher;
    
    /**
     * @inheritDoc
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }
    
    /**
     * @inheritDoc
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * @inheritDoc
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }
    
    /**
     * @inheritDoc
     */
    public function getEan()
    {
        return $this->ean;
    }
    
    /**
     * @inheritDoc
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }
    
    /**
     * @inheritDoc
     */
    public function getIsbn()
    {
        return $this->isbn;
    }
    
    /**
     * @inheritDoc
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
    
    /**
     * @inheritDoc
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @inheritDoc
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @inheritDoc
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }
    
    /**
     * @inheritDoc
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }
    
    /**
     * @inheritDoc
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }
    
    /**
     * @inheritDoc
     */
    public function getSeries()
    {
        return $this->series;
    }
    
    /**
     * @inheritDoc
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }
    
    /**
     * @inheritDoc
     */
    public function getCover()
    {
        return $this->cover;
    }
    
    /**
     * @inheritDoc
     */
    public function setPremiere(\DateTime $premiere = null)
    {
        $this->premiere = $premiere;
    }
    
    /**
     * @inheritDoc
     */
    public function getPremiere()
    {
        return $this->premiere;
    }
    
    /**
     * @inheritDoc
     */
    public function setReleaseYear($releaseYear)
    {
        $this->releaseYear = $releaseYear;
    }
    
    /**
     * @inheritDoc
     */
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }
    
    /**
     * @inheritDoc
     */
    public function setReleaseNumber($releaseNumber)
    {
        $this->releaseNumber = $releaseNumber;
    }

    /**
     * @inheritDoc
     */
    public function getReleaseNumber()
    {
        return $this->releaseNumber;
    }
    
    /**
     * @inheritDoc
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }
    
    /**
     * @inheritDoc
     */
    public function getPages()
    {
        return $this->pages;
    }
    
    /**
     * @inheritDoc
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }
    
    /**
     * @inheritDoc
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }
    
    /**
     * @inheritDoc
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * @inheritDoc
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * @inheritDoc
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }
    
    /**
     * @inheritDoc
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }
    
    /**
     * @inheritDoc
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;
    }

    /**
     * @inheritDoc
     */
    public function getAuthors()
    {
        return $this->authors;
    }
    
    /**
     * @inheritDoc
     */
    public function addAuthor(AuthorInterface $author)
    {
        if (!$this->authors->contains($author)) {
            $this->authors->add($author);
        }
    }
    
    /**
     * @inheritDoc
     */
    public function removeAuthor(AuthorInterface $author)
    {
        $this->authors->removeElement($author);
    }
    
    /**
     * @inheritDoc
     */
    public function setPublisher(PublisherInterface $publisher)
    {
        $this->publisher = $publisher;
    }
    
    /**
     * @inheritDoc
     */
    public function getPublisher()
    {
        return $this->publisher;
    }
}
