<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Factory;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface AuthorFactoryInterface
{
    /**
     * @return \Xidea\Component\Book\Model\AuthorInterface
     */
    public function create();
}
