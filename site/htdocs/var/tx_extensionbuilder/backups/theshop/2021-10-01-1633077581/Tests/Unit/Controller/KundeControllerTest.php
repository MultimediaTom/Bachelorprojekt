<?php
declare(strict_types=1);

namespace AxelSchaefer\Theshop\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class KundeControllerTest extends UnitTestCase
{
    /**
     * @var \AxelSchaefer\Theshop\Controller\KundeController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\AxelSchaefer\Theshop\Controller\KundeController::class)
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
    public function listActionFetchesAllKundesFromRepositoryAndAssignsThemToView()
    {
        $allKundes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $kundeRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\KundeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $kundeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allKundes));
        $this->inject($this->subject, 'kundeRepository', $kundeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('kundes', $allKundes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenKundeToView()
    {
        $kunde = new \AxelSchaefer\Theshop\Domain\Model\Kunde();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('kunde', $kunde);

        $this->subject->showAction($kunde);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenKundeToKundeRepository()
    {
        $kunde = new \AxelSchaefer\Theshop\Domain\Model\Kunde();

        $kundeRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\KundeRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $kundeRepository->expects(self::once())->method('add')->with($kunde);
        $this->inject($this->subject, 'kundeRepository', $kundeRepository);

        $this->subject->createAction($kunde);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenKundeToView()
    {
        $kunde = new \AxelSchaefer\Theshop\Domain\Model\Kunde();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('kunde', $kunde);

        $this->subject->editAction($kunde);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenKundeInKundeRepository()
    {
        $kunde = new \AxelSchaefer\Theshop\Domain\Model\Kunde();

        $kundeRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\KundeRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $kundeRepository->expects(self::once())->method('update')->with($kunde);
        $this->inject($this->subject, 'kundeRepository', $kundeRepository);

        $this->subject->updateAction($kunde);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenKundeFromKundeRepository()
    {
        $kunde = new \AxelSchaefer\Theshop\Domain\Model\Kunde();

        $kundeRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\KundeRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $kundeRepository->expects(self::once())->method('remove')->with($kunde);
        $this->inject($this->subject, 'kundeRepository', $kundeRepository);

        $this->subject->deleteAction($kunde);
    }
}
