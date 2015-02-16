<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Model;

use Xidea\Component\Product\Model\ProductInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface BookInterface extends ProductInterface
{
    /**
     * Sets the book title.
     *
     * @param string $title
     */
    public function setTitle($title);
    
    /**
     * Returns the book title.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Sets the authors.
     * 
     * @param array $authors
     */
    public function setBookAuthors($authors);

    /**
     * Returns the authors.
     *
     * @return array
     */
    public function getBookAuthors();
    
    /**
     * Adds the author.
     * 
     * @param BookAuthorInterface $author
     */
    public function addBookAuthor(BookAuthorInterface $author);
    
    /**
     * Removes the author.
     * 
     * @param BookAuthorInterface $author
     */
    public function removeBookAuthor(BookAuthorInterface $author);
    
    /**
     * Sets the publisher.
     * 
     * @param PublisherInterface $publisher
     */
    public function setPublisher(PublisherInterface $publisher);

    /**
     * Returns the publisher.
     *
     * @return PublisherInterface
     */
    public function getPublisher();
}
