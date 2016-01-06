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
abstract class Events
{
    /**
     * The PRE_SAVE event occurs when the book is saved.
     */
    const PRE_SAVE = 'xidea_book.book.pre_save';
    
    /**
     * The POST_SAVE event occurs when the book is saved.
     */
    const POST_SAVE = 'xidea_book.book.post_save';
    
    /**
     * The CREATE_INITIALIZE event occurs when the create process is initialized.
     */
    const CREATE_INITIALIZE = 'xidea_book.book.create_initialize';
    
    /**
     * The PRE_CREATE event occurs when the create process is initialized.
     */
    const PRE_CREATE = 'xidea_book.book.pre_create';
    
    /**
     * The CREATE_SUCCESS event occurs when the create process is initialized.
     */
    const CREATE_SUCCESS = 'xidea_book.book.create_success';
    
    /**
     * The CREATE_FORM_VALID event occurs when the create process is initialized.
     */
    const FORM_VALID = 'xidea_book.book.form_valid';
    
    /**
     * The CREATE_COMPLETED event occurs when the create process is initialized.
     */
    const CREATE_COMPLETED = 'xidea_book.book.create_completed';
    
}
