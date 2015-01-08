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
interface AuthorLoaderInterface
{
    /**
     * Returns a author by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\Book\Model\AuthorInterface
     */
    function load($id);
    
    /**
     * Returns all authors.
     * 
     * @return array
     */
    function loadAll();
    
    /**
     * Returns a set of authors matching the criteria.
     * 
     * @return array
     */
    function loadBy(array $criteria, array $orderBy = array(), $limit = null, $offset = null);
    
    /**
     * Returns author matching the criteria.
     * 
     * @return array
     */
    function loadOneBy(array $criteria, array $orderBy = array());
}
