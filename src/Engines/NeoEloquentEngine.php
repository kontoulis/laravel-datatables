<?php

namespace Yajra\Datatables\Engines;

use Vinelab\NeoEloquent\Eloquent\Builder;
use Yajra\Datatables\Request;

/**
 * Class EloquentEngine.
 *
 * @package Yajra\Datatables\Engines
 * @author  Arjay Angeles <aqangeles@gmail.com>
 */
class NeoEloquentEngine extends QueryBuilderEngine
{
    /**
     * @param mixed $model
     * @param \Yajra\Datatables\Request $request
     */
    public function __construct($model, Request $request)
    {
        $builder = $model instanceof Builder ? $model : $model->getQuery();
        parent::__construct($builder->getQuery(), $request);

        $this->query      = $builder;
        $this->query_type = 'neoeloquent';
    }
}
