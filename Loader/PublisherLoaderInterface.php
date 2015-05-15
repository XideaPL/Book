<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Loader;

use Xidea\Component\Base\Loader\ModelLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface PublisherLoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns a publisher by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\Book\Model\PublisherInterface
     */
    function load($id);
    
    /*
     * @param string|array $name
     * 
     * @return array
     */
    function loadByName($name);
}
