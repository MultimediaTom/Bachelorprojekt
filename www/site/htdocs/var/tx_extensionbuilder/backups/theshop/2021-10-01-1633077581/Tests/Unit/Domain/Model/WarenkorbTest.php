<?php
declare(strict_types=1);

namespace AxelSchaefer\Theshop\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class WarenkorbTest extends UnitTestCase
{
    /**
     * @var \AxelSchaefer\Theshop\Domain\Model\Warenkorb
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AxelSchaefer\Theshop\Domain\Model\Warenkorb();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getKundennummerReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getKundennummer()
        );
    }

    /**
     * @test
     */
    public function setKundennummerForIntSetsKundennummer()
    {
        $this->subject->setKundennummer(12);

        self::assertAttributeEquals(
            12,
            'kundennummer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArtikelnummerReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getArtikelnummer()
        );
    }

    /**
     * @test
     */
    public function setArtikelnummerForIntSetsArtikelnummer()
    {
        $this->subject->setArtikelnummer(12);

        self::assertAttributeEquals(
            12,
            'artikelnummer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAnzahlReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getAnzahl()
        );
    }

    /**
     * @test
     */
    public function setAnzahlForIntSetsAnzahl()
    {
        $this->subject->setAnzahl(12);

        self::assertAttributeEquals(
            12,
            'anzahl',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPreisReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPreis()
        );
    }

    /**
     * @test
     */
    public function setPreisForIntSetsPreis()
    {
        $this->subject->setPreis(12);

        self::assertAttributeEquals(
            12,
            'preis',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForStringSetsStatus()
    {
        $this->subject->setStatus('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'status',
            $this->subject
        );
    }
}
