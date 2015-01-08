<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Builder;

use Xidea\Component\Book\Model\AuthorInterface,
    Xidea\Component\Book\Model\PublisherInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface BookBuilderInterface
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
     * @return \Xidea\Component\Book\Model\BookInterface
     */
    function getBook();
}
