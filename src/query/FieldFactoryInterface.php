<?php
/**
 * Data Mapper for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-data-mapper
 * @package   yii2-data-mapper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2018, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii\DataMapper\query;

interface FieldFactoryInterface
{
    /**
     * @param $model
     * @param $map
     * @return Field[]
     */
    public function createByModelAttributes($model, $map);

    /**
     * @return string
     */
    public function getHierarchySeparator();
}
