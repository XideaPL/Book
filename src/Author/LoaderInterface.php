<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Book\Author;

use Xidea\Base\Model\LoaderInterface as ModelLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface LoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns a author by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Book\AuthorInterface
     */
    function load($id);
    
    /*
     * @param string|array $name
     * 
     * @return array
     */
    function loadByName($name);
    
    /**
     * Returns a set of objects.
     * 
     * @param int $page
     * @param int $limit
     * 
     * @return array
     */
    function loadByPage($page = 1, $limit = 25);
}
