<?php
namespace Appsapp\Appsapp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Michael Egli <michael.egli@appsapp.io>
 */
class AppsappControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Appsapp\Appsapp\Controller\AppsappController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Appsapp\Appsapp\Controller\AppsappController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllAppsappsFromRepositoryAndAssignsThemToView()
    {

        $allAppsapps = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $appsappRepository = $this->getMockBuilder(\Appsapp\Appsapp\Domain\Repository\AppsappRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $appsappRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAppsapps));
        $this->inject($this->subject, 'appsappRepository', $appsappRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('appsapps', $allAppsapps);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAppsappToView()
    {
        $appsapp = new \Appsapp\Appsapp\Domain\Model\Appsapp();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('appsapp', $appsapp);

        $this->subject->showAction($appsapp);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenAppsappToAppsappRepository()
    {
        $appsapp = new \Appsapp\Appsapp\Domain\Model\Appsapp();

        $appsappRepository = $this->getMockBuilder(\Appsapp\Appsapp\Domain\Repository\AppsappRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $appsappRepository->expects(self::once())->method('add')->with($appsapp);
        $this->inject($this->subject, 'appsappRepository', $appsappRepository);

        $this->subject->createAction($appsapp);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenAppsappToView()
    {
        $appsapp = new \Appsapp\Appsapp\Domain\Model\Appsapp();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('appsapp', $appsapp);

        $this->subject->editAction($appsapp);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenAppsappInAppsappRepository()
    {
        $appsapp = new \Appsapp\Appsapp\Domain\Model\Appsapp();

        $appsappRepository = $this->getMockBuilder(\Appsapp\Appsapp\Domain\Repository\AppsappRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $appsappRepository->expects(self::once())->method('update')->with($appsapp);
        $this->inject($this->subject, 'appsappRepository', $appsappRepository);

        $this->subject->updateAction($appsapp);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenAppsappFromAppsappRepository()
    {
        $appsapp = new \Appsapp\Appsapp\Domain\Model\Appsapp();

        $appsappRepository = $this->getMockBuilder(\Appsapp\Appsapp\Domain\Repository\AppsappRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $appsappRepository->expects(self::once())->method('remove')->with($appsapp);
        $this->inject($this->subject, 'appsappRepository', $appsappRepository);

        $this->subject->deleteAction($appsapp);
    }
}
