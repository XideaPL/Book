<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Manager;

use Xidea\Component\Book\Model\BookAuthorInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface BookAuthorManagerInterface
{
    /**
     * Saves a author.
     * 
     * @param BookAuthorInterface $author
     */
    function save(BookAuthorInterface $author);

    /**
     * Updates a author.
     * 
     * @param BookAuthorInterface $author
     */
    function update(BookAuthorInterface $author);

    /**
     * Deletes a author.
     * 
     * @param BookAuthorInterface $author
     */
    function delete(BookAuthorInterface $author);
}
