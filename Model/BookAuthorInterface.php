<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Model;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface BookAuthorInterface
{
    /**
     * Returns the author id.
     * 
     * @return string The author id
     */
    public function getId();
    
    /**
     * Returns the author name.
     *
     * @return string
     */
    public function getName();
    
    /**
     * Sets the author description.
     *
     * @param string $description
     */
    public function setDescription($description);
    
    /**
     * Returns the author description.
     *
     * @return string
     */
    public function getDescription();
}
