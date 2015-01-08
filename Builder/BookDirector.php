<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Builder;

use Xidea\Component\Book\Provider\AuthorProviderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class BookDirector implements BookDirectorInterface
{
    protected $bookBuilder;
    
    public function __construct(BookBuilderInterface $bookBuilder)
    {
        $this->bookBuilder = $bookBuilder;
    }
    
    public function build()
    {
        $this->bookBuilder->create();
        
        return $this->bookBuilder->getBook();
    }
}
