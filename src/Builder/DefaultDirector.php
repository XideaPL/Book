<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Book\Builder;

use Xidea\Book\BuilderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class DefaultDirector implements BookDirectorInterface
{
    protected $builder;
    
    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }
    
    public function build()
    {
        $this->builder->create();
        
        return $this->builder->getBook();
    }
}
