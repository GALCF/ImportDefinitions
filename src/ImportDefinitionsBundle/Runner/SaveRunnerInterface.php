<?php
/**
 * Import Definitions.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2016-2018 w-vision AG (https://www.w-vision.ch)
 * @license    https://github.com/w-vision/ImportDefinitions/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

namespace ImportDefinitionsBundle\Runner;

use ImportDefinitionsBundle\Model\Mapping;
use Pimcore\Model\DataObject\Concrete;
use ImportDefinitionsBundle\Model\DefinitionInterface;

interface SaveRunnerInterface extends RunnerInterface
{
    /**
     * @param Concrete $object
     * @param DefinitionInterface $definition
     * @param $data
     * @param $dataSet
     * @param $params
     * @param $filter
     * @return mixed
     */
    public function shouldSaveObject(Concrete $object, DefinitionInterface $definition, $data, $dataSet, $params, $filter);
}