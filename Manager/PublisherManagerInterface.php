<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Book\Manager;

use Xidea\Component\Book\Model\PublisherInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface PublisherManagerInterface
{
    /**
     * Saves a publisher.
     * 
     * @param PublisherInterface $publisher
     */
    function save(PublisherInterface $publisher);

    /**
     * Updates a publisher.
     * 
     * @param PublisherInterface $publisher
     */
    function update(PublisherInterface $publisher);

    /**
     * Deletes a publisher.
     * 
     * @param PublisherInterface $publisher
     */
    function delete(PublisherInterface $publisher);
}
