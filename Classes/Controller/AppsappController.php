<?php
namespace Appsapp\Appsapp\Controller;

/***
 *
 * This file is part of the "Appsapp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Michael Egli <michael.egli@appsapp.io>
 *
 ***/

/**
 * AppsappController
 */
class AppsappController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * appsappRepository
     *
     * @var \Appsapp\Appsapp\Domain\Repository\AppsappRepository
     * @inject
     */
    protected $appsappRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $appsapps = $this->appsappRepository->findAll();
        $this->view->assign('appsapps', $appsapps);
    }

    /**
     * action show
     *
     * @param \Appsapp\Appsapp\Domain\Model\Appsapp $appsapp
     * @return void
     */
    public function showAction(\Appsapp\Appsapp\Domain\Model\Appsapp $appsapp)
    {
        $this->view->assign('appsapp', $appsapp);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \Appsapp\Appsapp\Domain\Model\Appsapp $newAppsapp
     * @return void
     */
    public function createAction(\Appsapp\Appsapp\Domain\Model\Appsapp $newAppsapp)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->appsappRepository->add($newAppsapp);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Appsapp\Appsapp\Domain\Model\Appsapp $appsapp
     * @ignorevalidation $appsapp
     * @return void
     */
    public function editAction(\Appsapp\Appsapp\Domain\Model\Appsapp $appsapp)
    {
        $this->view->assign('appsapp', $appsapp);
    }

    /**
     * action update
     *
     * @param \Appsapp\Appsapp\Domain\Model\Appsapp $appsapp
     * @return void
     */
    public function updateAction(\Appsapp\Appsapp\Domain\Model\Appsapp $appsapp)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->appsappRepository->update($appsapp);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Appsapp\Appsapp\Domain\Model\Appsapp $appsapp
     * @return void
     */
    public function deleteAction(\Appsapp\Appsapp\Domain\Model\Appsapp $appsapp)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->appsappRepository->remove($appsapp);
        $this->redirect('list');
    }

    /**
     * action
     *
     * @return void
     */
    public function Action()
    {

    }
}
