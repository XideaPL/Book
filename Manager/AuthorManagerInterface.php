<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Manager;

use Xidea\Component\Book\Model\AuthorInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface AuthorManagerInterface
{
    /**
     * Saves a author.
     * 
     * @param AuthorInterface $author
     */
    function save(AuthorInterface $author);

    /**
     * Updates a author.
     * 
     * @param AuthorInterface $author
     */
    function update(AuthorInterface $author);

    /**
     * Deletes a author.
     * 
     * @param AuthorInterface $author
     */
    function delete(AuthorInterface $author);
}
