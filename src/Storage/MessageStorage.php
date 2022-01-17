<?php
declare(strict_types=1);

/*
 * This file is part of the Zenscrape package
 *
 * (c) Andrei Tsvyrko <nordic_alf@protonmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenscrape\Storage;

/**
 * Class MessageStorage - is storage for all messages in this package
 */
class MessageStorage
{
    const API_KEY_NOT_BE_FOUND = 'The API-key not be found';
    const TRANSFORM_NOT_FOUND = 'Transform class not found';
    const URL_IS_REQUIRED = 'The url parameter in the query request is required';
    const LOCATION_IS_REQUIRED = 'The location parameter in the query request is required';
    const LOCATION_ERROR = 'Premium locations only works together with premium=true';
    const SCROLL_TO_BOTTOM_ERROR = 'Scroll to bottom only works together with render=true';
    const WAIT_FOR_ERROR = 'Wait for and Wait for css only works together with render=true';
    const CUSTOM_HEADERS_REQUIRED = 'At least you should have Content-Type header or more headers';
}