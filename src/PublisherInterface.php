<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Book;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface PublisherInterface
{
    /**
     * Returns the publisher id.
     * 
     * @return string The publisher id
     */
    public function getId();
    
    /**
     * Returns the publisher name.
     *
     * @return string
     */
    public function getName();
    
    /**
     * Sets the publisher description.
     *
     * @param string $description
     */
    public function setDescription($description);
    
    /**
     * Returns the publisher description.
     *
     * @return string
     */
    public function getDescription();
}
