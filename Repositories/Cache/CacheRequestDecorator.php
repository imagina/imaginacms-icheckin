<?php

namespace Modules\Icheckin\Repositories\Cache;

use Modules\Core\Repositories\Cache\BaseCacheDecorator;
use Modules\Icheckin\Repositories\RequestRepository;

class CacheRequestDecorator extends BaseCacheDecorator implements RequestRepository
{
    public function __construct(RequestRepository $request)
    {
        parent::__construct();
        $this->entityName = 'icheckin.requests';
        $this->repository = $request;
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
