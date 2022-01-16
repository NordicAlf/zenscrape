<?php
declare(strict_types=1);

namespace Zenscrape\Validator;

use Zenscrape\Exception\ZenscrapeException;
use Zenscrape\Model\QueryRequestModel;
use Zenscrape\Storage\LocationStorage;
use Zenscrape\Storage\MessageStorage;

class QueryRequestValidator implements ValidatorInterface
{
    public function __construct(
        private QueryRequestModel $model
    ) {}

    public function check(): bool
    {
        switch (true) {
            case empty($this->model->getUrl()):
                throw new ZenscrapeException(MessageStorage::URL_IS_REQUIRED);
            case empty($this->model->getLocation()):
                throw new ZenscrapeException(MessageStorage::LOCATION_IS_REQUIRED);
            case ($this->model->getPremium() !== true && $this->model->getLocation() !== LocationStorage::COMMON_NORTH_AMERICA && $this->model->getLocation() !== LocationStorage::COMMON_EUROPE):
                throw new ZenscrapeException(MessageStorage::LOCATION_ERROR);
            case $this->model->getRender() !== true && $this->model->getScrollToBottom() === true:
                throw new ZenscrapeException(MessageStorage::SCROLL_TO_BOTTOM_ERROR);
            case $this->model->getRender() !== true && (!empty($this->model->getWaitFor()) || !empty($this->model->getWaitForCss())):
                throw new ZenscrapeException(MessageStorage::WAIT_FOR_ERROR);
        }

        return true;
    }
}