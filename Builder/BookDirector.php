<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Builder;

use Xidea\Component\Product\Builder\ProductDirector,
    Xidea\Component\Product\Provider\AuthorProviderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class BookDirector extends ProductDirector
{
    public function __construct(BookBuilderInterface $bookBuilder, AuthorProviderInterface $authorProvider)
    {
        parent::__construct($bookBuilder, $authorProvider);
    }
}
