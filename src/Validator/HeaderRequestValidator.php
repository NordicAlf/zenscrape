<?php
declare(strict_types=1);

namespace Zenscrape\Validator;

use Zenscrape\Exception\ZenscrapeException;
use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Storage\MessageStorage;

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