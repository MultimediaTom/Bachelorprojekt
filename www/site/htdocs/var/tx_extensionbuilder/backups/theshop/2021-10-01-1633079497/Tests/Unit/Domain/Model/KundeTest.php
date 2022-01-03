<?php
declare(strict_types=1);

namespace AxelSchaefer\Theshop\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class KundeTest extends UnitTestCase
{
    /**
     * @var \AxelSchaefer\Theshop\Domain\Model\Kunde
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AxelSchaefer\Theshop\Domain\Model\Kunde();
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
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVornameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVorname()
        );
    }

    /**
     * @test
     */
    public function setVornameForStringSetsVorname()
    {
        $this->subject->setVorname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vorname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAdresseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdresse()
        );
    }

    /**
     * @test
     */
    public function setAdresseForStringSetsAdresse()
    {
        $this->subject->setAdresse('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'adresse',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBestellungReturnsInitialValueForWarenkorb()
    {
        self::assertEquals(
            null,
            $this->subject->getBestellung()
        );
    }

    /**
     * @test
     */
    public function setBestellungForWarenkorbSetsBestellung()
    {
        $bestellungFixture = new \AxelSchaefer\Theshop\Domain\Model\Warenkorb();
        $this->subject->setBestellung($bestellungFixture);

        self::assertAttributeEquals(
            $bestellungFixture,
            'bestellung',
            $this->subject
        );
    }
}
