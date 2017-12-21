<?php
namespace Appsapp\Appsapp\Command;

/**
 * This file is part of the "appsapp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */
use TYPO3\CMS\Extbase\Mvc\Controller\CommandController;

/**
 * Controller to import news records
 *
 */
class CompilerCommandController extends CommandController
{

    /**
     * Import for EXT:news
     *
     * @cli
     */
    public function runCommand()
    {

        $this->outputLine('test');

    }


}
