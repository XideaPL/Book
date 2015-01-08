<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Loader;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface BookLoaderInterface
{
    /**
     * Returns a book by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\Book\Model\BookInterface
     */
    function load($id);
    
    /**
     * Returns all books.
     * 
     * @return array
     */
    function loadAll();
    
    /**
     * Returns a set of books matching the criteria.
     * 
     * @return array
     */
    function loadBy(array $criteria, array $orderBy = array(), $limit = null, $offset = null);
    
    /**
     * Returns book matching the criteria.
     * 
     * @return array
     */
    function loadOneBy(array $criteria, array $orderBy = array());
}
