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
interface BookInterface
{

    /**
     * Returns the book id.
     * 
     * @return string The book id
     */
    public function getId();

    /**
     * Sets the book slug.
     *
     * @param string $slug
     */
    public function setSlug($slug);
    
    /**
     * Returns the book slug.
     *
     * @return string
     */
    public function getSlug();
    
    /**
     * Sets the book ean.
     *
     * @param string $ean
     */
    public function setEan($ean);
    
    /**
     * Returns the book ean.
     *
     * @return string
     */
    public function getEan();
    
    /**
     * Sets the book isbn.
     *
     * @param string $isbn
     */
    public function setIsbn($isbn);
    
    /**
     * Returns the book isbn.
     *
     * @return string
     */
    public function getIsbn();
    
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
     * Sets the book description.
     *
     * @param string $description
     */
    public function setDescription($description);
    
    /**
     * Returns the book description.
     *
     * @return string
     */
    public function getDescription();
    
    /**
     * Sets the book short description.
     *
     * @param string $shortDescription description
     */
    public function setShortDescription($shortDescription);
    
    /**
     * Returns the book short description.
     *
     * @return string
     */
    public function getShortDescription();
    
    /**
     * Sets the book series.
     *
     * @param string $series
     */
    public function setSeries($series);
    
    /**
     * Returns the book series.
     *
     * @return string
     */
    public function getSeries();
    
    /**
     * Sets the book binding.
     *
     * @param string $binding
     */
    public function setBinding($binding);
    
    /**
     * Returns the book binding.
     *
     * @return string
     */
    public function getBinding();
    
    /**
     * @param datetime $premiere
     */
    public function setPremiere(\DateTime $premiere = null);

    /**
     * @return datetime
     */
    public function getPremiere();
    
    /**
     * Sets the book release year.
     *
     * @param string $releaseYear
     */
    public function setReleaseYear($releaseYear);
    
    /**
     * Returns the book release year.
     *
     * @return string
     */
    public function getReleaseYear();
    
    /**
     * Sets the book release number.
     *
     * @param string $releaseNumber
     */
    public function setReleaseNumber($releaseNumber);
    
    /**
     * Returns the book release number.
     *
     * @return string
     */
    public function getReleaseNumber();
    
    /**
     * Sets the book pages.
     *
     * @param string $pages
     */
    public function setPages($pages);
    
    /**
     * Returns the book pages.
     *
     * @return string
     */
    public function getPages();
    
    /**
     * Sets the book dimensions.
     *
     * @param string $dimensions
     */
    public function setDimensions($dimensions);
    
    /**
     * Returns the book dimensions.
     *
     * @return string
     */
    public function getDimensions();
    
    /**
     * Sets the book price.
     *
     * @param string $price
     */
    public function setPrice($price);
    
    /**
     * Returns the book price.
     *
     * @return string
     */
    public function getPrice();
    
    /**
     * Sets the book image path.
     *
     * @param string $imagePath
     */
    public function setImagePath($imagePath);
    
    /**
     * Returns the book image path.
     *
     * @return string
     */
    public function getImagePath();

    /**
     * @param datetime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * @return datetime
     */
    public function getCreatedAt();

    /**
     * @param datetime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * @return datetime
     */
    public function getUpdatedAt();

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
