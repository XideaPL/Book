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
interface BookLoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns a book by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\Book\Model\BookInterface
     */
    function load($id);
}
