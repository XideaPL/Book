<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Loader;

use Xidea\Component\Base\Loader\ObjectLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface BookAuthorLoaderInterface extends ObjectLoaderInterface
{
    /**
     * Returns a author by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\Book\Model\AuthorInterface
     */
    function load($id);
    
    /*
     * @param string|array $name
     * 
     * @return array
     */
    function loadByName($name);
}
