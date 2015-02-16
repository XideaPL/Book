<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Builder;

use Xidea\Component\Book\Factory\BookFactoryInterface,
    Xidea\Component\Book\Model\BookAuthorInterface,
    Xidea\Component\Book\Model\PublisherInterface;

use Xidea\Component\Product\Builder\ProductBuilder;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class BookBuilder extends ProductBuilder implements BookBuilderInterface
{
    public function __construct(BookFactoryInterface $bookFactory)
    {
        parent::__construct($bookFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function addBookAuthor(BookAuthorInterface $bookAuthor)
    {
        $this->product->addBookAuthor($bookAuthor);
    }
    
    /**
     * {@inheritdoc}
     */
    public function setPublisher(PublisherInterface $publisher)
    {
        $this->book->setPublisher($publisher);
    }
}
