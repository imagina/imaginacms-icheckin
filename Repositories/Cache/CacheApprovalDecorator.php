<?php

namespace Modules\Icheckin\Repositories\Cache;

use Modules\Core\Repositories\Cache\BaseCacheDecorator;
use Modules\Icheckin\Repositories\ApprovalRepository;

class CacheApprovalDecorator extends BaseCacheDecorator implements ApprovalRepository
{
    public function __construct(ApprovalRepository $aprovement)
    {
        parent::__construct();
        $this->entityName = 'icheckin.aprovements';
        $this->repository = $aprovement;
    }

  public function getItemsBy($params)
  {
    $this->clearCache();

    return $this->repository->getItemsBy($params);
  }

  public function getItemsWithShifts($params)
  {
    $this->clearCache();

    return $this->repository->getItemsWithShifts($params);
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
