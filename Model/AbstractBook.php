<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Model;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class AbstractBook implements BookInterface
{
    /*
     * @var int
     */
    protected $id;
    
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
    protected $title;
    
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
    protected $binding;
    
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
     * @var datetime
     */
    protected $createdAt;
    
    /*
     * @var datetime
     */
    protected $updatedAt;
    
    /*
     * @var array
     */
    protected $bookAuthors;
    
    /*
     * @var PublisherInterface
     */
    protected $publisher;
    
    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }
    
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
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle()
    {
        return $this->title;
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
    public function setBinding($binding)
    {
        $this->binding = $binding;
    }
    
    /**
     * @inheritDoc
     */
    public function getBinding()
    {
        return $this->binding;
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
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
    }
    
    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * @inheritDoc
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * @inheritDoc
     */
    public function setBookAuthors($authors)
    {
        $this->bookAuthors = $authors;
    }

    /**
     * @inheritDoc
     */
    public function getBookAuthors()
    {
        return $this->bookAuthors;
    }
    
    /**
     * @inheritDoc
     */
    public function addBookAuthor(BookAuthorInterface $author)
    {
        if (!$this->bookAuthors->contains($author)) {
            $this->bookAuthors->add($author);
        }
    }
    
    /**
     * @inheritDoc
     */
    public function removeBookAuthor(BookAuthorInterface $author)
    {
        $this->bookAuthors->removeElement($author);
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
