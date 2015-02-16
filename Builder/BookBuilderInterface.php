<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Builder;

use Xidea\Component\Book\Model\BookAuthorInterface,
    Xidea\Component\Book\Model\PublisherInterface;

use Xidea\Component\Product\Builder\ProductBuilderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface BookBuilderInterface extends ProductBuilderInterface
{
    /**
     * @param BookAuthorInterface $bookAuthor
     */
    function addBookAuthor(BookAuthorInterface $bookAuthor);
    
    /**
     * @param PublisherInterface $publisher
     */
    function setPublisher(PublisherInterface $publisher);
}
