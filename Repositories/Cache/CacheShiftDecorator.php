<?php

namespace Modules\Icheckin\Repositories\Cache;

use Modules\Core\Repositories\Cache\BaseCacheDecorator;
use Modules\Icheckin\Repositories\ShiftRepository;

class CacheShiftDecorator extends BaseCacheDecorator implements ShiftRepository
{
    public function __construct(ShiftRepository $shift)
    {
        parent::__construct();
        $this->entityName = 'icheckin.shifts';
        $this->repository = $shift;
    }

  public function getItemsBy($params)
  {
    $this->clearCache();

    return $this->repository->getItemsBy($params);
  }

  public function getItem($criteria, $params = false)
  {
    $this->clearCache();

    return $this->repository->getItem($criteria, $params);
  }

  public function updateBy($criteria, $data, $params = false)
  {
    $this->clearCache();

    return $this->repository->updateBy($criteria, $data, $params);
  }

  public function deleteBy($criteria, $params = false)
  {
    $this->clearCache();

    return $this->repository->deleteBy($criteria, $params);
  }
}
