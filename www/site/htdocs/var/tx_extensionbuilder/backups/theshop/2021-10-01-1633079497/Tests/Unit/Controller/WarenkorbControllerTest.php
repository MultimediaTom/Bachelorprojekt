<?php
declare(strict_types=1);

namespace AxelSchaefer\Theshop\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class WarenkorbControllerTest extends UnitTestCase
{
    /**
     * @var \AxelSchaefer\Theshop\Controller\WarenkorbController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\AxelSchaefer\Theshop\Controller\WarenkorbController::class)
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
    public function listActionFetchesAllWarenkorbsFromRepositoryAndAssignsThemToView()
    {
        $allWarenkorbs = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $warenkorbRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\WarenkorbRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $warenkorbRepository->expects(self::once())->method('findAll')->will(self::returnValue($allWarenkorbs));
        $this->inject($this->subject, 'warenkorbRepository', $warenkorbRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('warenkorbs', $allWarenkorbs);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenWarenkorbToView()
    {
        $warenkorb = new \AxelSchaefer\Theshop\Domain\Model\Warenkorb();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('warenkorb', $warenkorb);

        $this->subject->showAction($warenkorb);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenWarenkorbToWarenkorbRepository()
    {
        $warenkorb = new \AxelSchaefer\Theshop\Domain\Model\Warenkorb();

        $warenkorbRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\WarenkorbRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $warenkorbRepository->expects(self::once())->method('add')->with($warenkorb);
        $this->inject($this->subject, 'warenkorbRepository', $warenkorbRepository);

        $this->subject->createAction($warenkorb);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenWarenkorbToView()
    {
        $warenkorb = new \AxelSchaefer\Theshop\Domain\Model\Warenkorb();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('warenkorb', $warenkorb);

        $this->subject->editAction($warenkorb);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenWarenkorbInWarenkorbRepository()
    {
        $warenkorb = new \AxelSchaefer\Theshop\Domain\Model\Warenkorb();

        $warenkorbRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\WarenkorbRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $warenkorbRepository->expects(self::once())->method('update')->with($warenkorb);
        $this->inject($this->subject, 'warenkorbRepository', $warenkorbRepository);

        $this->subject->updateAction($warenkorb);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenWarenkorbFromWarenkorbRepository()
    {
        $warenkorb = new \AxelSchaefer\Theshop\Domain\Model\Warenkorb();

        $warenkorbRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\WarenkorbRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $warenkorbRepository->expects(self::once())->method('remove')->with($warenkorb);
        $this->inject($this->subject, 'warenkorbRepository', $warenkorbRepository);

        $this->subject->deleteAction($warenkorb);
    }
}
