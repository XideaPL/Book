<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Model;

use Xidea\Component\Product\Model\AbstractProduct;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class AbstractBook extends AbstractProduct implements BookInterface
{
    /*
     * @var string
     */
    protected $title;
    
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
