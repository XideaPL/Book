<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Book\Builder;

use Xidea\Base\Model\FactoryInterface;
use Xidea\Book\BuilderInterface;
use Xidea\Book\AuthorInterface,
    Xidea\Book\PublisherInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class DefaultBuilder implements BuilderInterface
{
    /**
     * Currently built book.
     *
     * @var BookInterface
     */
    protected $book;

    /**
     * Book factory.
     *
     * @var FactoryInterface
     */
    protected $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $this->book = $this->factory->create();
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addAuthor(AuthorInterface $author)
    {
        $this->book->addAuthor($author);
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setPublisher(PublisherInterface $publisher)
    {
        $this->book->setPublisher($publisher);
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBook()
    {
        return $this->book;
    }

}
