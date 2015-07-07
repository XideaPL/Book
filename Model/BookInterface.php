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
    const COVER_SOFT = 1;
    const COVER_HARD = 2;
    
    /**
     * Returns the id.
     * 
     * @return string The id
     */
    function getId();

    /**
     * Sets the slug.
     *
     * @param string $slug
     */
    function setSlug($slug);
    
    /**
     * Returns the slug.
     *
     * @return string
     */
    function getSlug();
    
    /**
     * Sets the ean.
     *
     * @param string $ean
     */
    function setEan($ean);
    
    /**
     * Returns the ean.
     *
     * @return string
     */
    function getEan();
    
    /**
     * Sets the isbn.
     *
     * @param string $isbn
     */
    function setIsbn($isbn);
    
    /**
     * Returns the isbn.
     *
     * @return string
     */
    function getIsbn();
    
    /**
     * Sets the category.
     *
     * @param string $category
     */
    function setCategory($category);
    
    /**
     * Returns the category.
     *
     * @return string
     */
    function getCategory();
    
    /**
     * Sets the name.
     *
     * @param string $name
     */
    function setName($name);
    
    /**
     * Returns the name.
     *
     * @return string
     */
    function getName();

    /**
     * Sets the description.
     *
     * @param string $description
     */
    function setDescription($description);
    
    /**
     * Returns the description.
     *
     * @return string
     */
    function getDescription();
    
    /**
     * Sets the short description.
     *
     * @param string $shortDescription description
     */
    function setShortDescription($shortDescription);
    
    /**
     * Returns the short description.
     *
     * @return string
     */
    function getShortDescription();
    
    /**
     * Sets the series.
     *
     * @param string $series
     */
    function setSeries($series);
    
    /**
     * Returns the series.
     *
     * @return string
     */
    function getSeries();
    
    /**
     * Sets the cover.
     *
     * @param string $cover
     */
    function setCover($cover);
    
    /**
     * Returns the cover.
     *
     * @return string
     */
    function getCover();
    
    /**
     * @param \DateTime $premiere
     */
    function setPremiere(\DateTime $premiere = null);

    /**
     * @return \DateTime
     */
    function getPremiere();
    
    /**
     * Sets the release year.
     *
     * @param string $releaseYear
     */
    function setReleaseYear($releaseYear);
    
    /**
     * Returns the release year.
     *
     * @return string
     */
    function getReleaseYear();
    
    /**
     * Sets the release number.
     *
     * @param string $releaseNumber
     */
    function setReleaseNumber($releaseNumber);
    
    /**
     * Returns the release number.
     *
     * @return string
     */
    function getReleaseNumber();
    
    /**
     * Sets the pages.
     *
     * @param string $pages
     */
    function setPages($pages);
    
    /**
     * Returns the pages.
     *
     * @return string
     */
    function getPages();
    
    /**
     * Sets the dimensions.
     *
     * @param string $dimensions
     */
    function setDimensions($dimensions);
    
    /**
     * Returns the dimensions.
     *
     * @return string
     */
    function getDimensions();
    
    /**
     * Sets the price.
     *
     * @param string $price
     */
    function setPrice($price);
    
    /**
     * Returns the price.
     *
     * @return string
     */
    function getPrice();
    
    /**
     * Sets the image.
     *
     * @param string $image
     */
    function setImage($image);
    
    /**
     * Returns the image.
     *
     * @return string
     */
    function getImage();

    /**
     * @param \DateTime $createdAt
     */
    function setCreatedAt(\DateTime $createdAt = null);

    /**
     * @return \DateTime
     */
    function getCreatedAt();

    /**
     * @param \DateTime $updatedAt
     */
    function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * @return \DateTime
     */
    function getUpdatedAt();

    /**
     * Sets the authors.
     * 
     * @param array $authors
     */
    function setAuthors($authors);

    /**
     * Returns the authors.
     *
     * @return array
     */
    function getAuthors();
    
    /**
     * Adds the author.
     * 
     * @param AuthorInterface $author
     */
    function addAuthor(AuthorInterface $author);
    
    /**
     * Removes the author.
     * 
     * @param AuthorInterface $author
     */
    function removeAuthor(AuthorInterface $author);
    
    /**
     * Sets the publisher.
     * 
     * @param PublisherInterface $publisher
     */
    function setPublisher(PublisherInterface $publisher);

    /**
     * Returns the publisher.
     *
     * @return PublisherInterface
     */
    function getPublisher();
}
