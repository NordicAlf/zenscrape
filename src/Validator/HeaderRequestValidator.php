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

namespace Zenscrape\Validator;

use Zenscrape\Exception\ZenscrapeException;
use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Storage\MessageStorage;

/**
 * Class HeaderRequestValidator check all headers for request
 */
class HeaderRequestValidator implements ValidatorInterface
{
    public function __construct(
        private HeaderRequestModel $model
    ) {}

    public function check(): bool
    {
        switch (true) {
            case empty($this->model->getApikey()):
                throw new ZenscrapeException(MessageStorage::API_KEY_NOT_BE_FOUND);
            case empty($this->model->getCustomHeaders()):
                throw new ZenscrapeException(MessageStorage::CUSTOM_HEADERS_REQUIRED);
        }

        return true;
    }
}