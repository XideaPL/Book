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
    protected $title;
    
    /*
     * @var string
     */
    protected $description;
    
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
