<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Manager;

use Xidea\Component\Book\Model\BookInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface BookManagerInterface
{
    /**
     * Saves a book.
     * 
     * @param BookInterface $book
     */
    function save(BookInterface $book);

    /**
     * Updates a book.
     * 
     * @param BookInterface $book
     */
    function update(BookInterface $book);

    /**
     * Deletes a book.
     * 
     * @param BookInterface $book
     */
    function delete(BookInterface $book);
}
