<?php
declare(strict_types=1);

namespace AxelSchaefer\Theshop\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ProduktControllerTest extends UnitTestCase
{
    /**
     * @var \AxelSchaefer\Theshop\Controller\ProduktController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\AxelSchaefer\Theshop\Controller\ProduktController::class)
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
    public function listActionFetchesAllProduktsFromRepositoryAndAssignsThemToView()
    {
        $allProdukts = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $produktRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\ProduktRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $produktRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProdukts));
        $this->inject($this->subject, 'produktRepository', $produktRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('produkts', $allProdukts);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProduktToView()
    {
        $produkt = new \AxelSchaefer\Theshop\Domain\Model\Produkt();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('produkt', $produkt);

        $this->subject->showAction($produkt);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenProduktToProduktRepository()
    {
        $produkt = new \AxelSchaefer\Theshop\Domain\Model\Produkt();

        $produktRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\ProduktRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktRepository->expects(self::once())->method('add')->with($produkt);
        $this->inject($this->subject, 'produktRepository', $produktRepository);

        $this->subject->createAction($produkt);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenProduktToView()
    {
        $produkt = new \AxelSchaefer\Theshop\Domain\Model\Produkt();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('produkt', $produkt);

        $this->subject->editAction($produkt);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenProduktInProduktRepository()
    {
        $produkt = new \AxelSchaefer\Theshop\Domain\Model\Produkt();

        $produktRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\ProduktRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktRepository->expects(self::once())->method('update')->with($produkt);
        $this->inject($this->subject, 'produktRepository', $produktRepository);

        $this->subject->updateAction($produkt);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenProduktFromProduktRepository()
    {
        $produkt = new \AxelSchaefer\Theshop\Domain\Model\Produkt();

        $produktRepository = $this->getMockBuilder(\AxelSchaefer\Theshop\Domain\Repository\ProduktRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktRepository->expects(self::once())->method('remove')->with($produkt);
        $this->inject($this->subject, 'produktRepository', $produktRepository);

        $this->subject->deleteAction($produkt);
    }
}
