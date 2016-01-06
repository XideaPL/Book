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
interface BuilderInterface
{
    /**
     * @return void
     */
    function create();
    
    /**
     * @param AuthorInterface $author
     */
    function addAuthor(AuthorInterface $author);
    
    /**
     * @param PublisherInterface $publisher
     */
    function setPublisher(PublisherInterface $publisher);
    
    /**
     * @return \Xidea\Book\BookInterface
     */
    function getBook();
}
