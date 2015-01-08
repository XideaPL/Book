<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Builder;

use Xidea\Component\Book\Factory\BookFactoryInterface,
    Xidea\Component\Book\Model\AuthorInterface,
    Xidea\Component\Book\Model\PublisherInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class BookBuilder implements BookBuilderInterface
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
     * @var BookFactoryInterface
     */
    protected $factory;

    public function __construct(BookFactoryInterface $bookFactory)
    {
        $this->factory = $bookFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $this->book = $this->factory->create();
    }

    /**
     * {@inheritdoc}
     */
    public function addAuthor(AuthorInterface $author)
    {
        $this->book->addAuthor($author);
    }
    
    /**
     * {@inheritdoc}
     */
    public function setPublisher(PublisherInterface $publisher)
    {
        $this->book->setPublisher($publisher);
    }

    /**
     * {@inheritdoc}
     */
    public function getBook()
    {
        return $this->book;
    }

}
