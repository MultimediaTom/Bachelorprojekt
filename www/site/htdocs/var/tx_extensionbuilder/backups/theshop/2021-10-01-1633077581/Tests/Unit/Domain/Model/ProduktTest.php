<?php
declare(strict_types=1);

namespace AxelSchaefer\Theshop\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ProduktTest extends UnitTestCase
{
    /**
     * @var \AxelSchaefer\Theshop\Domain\Model\Produkt
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AxelSchaefer\Theshop\Domain\Model\Produkt();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getArtikelnummerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArtikelnummer()
        );
    }

    /**
     * @test
     */
    public function setArtikelnummerForStringSetsArtikelnummer()
    {
        $this->subject->setArtikelnummer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'artikelnummer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBezeichnung()
        );
    }

    /**
     * @test
     */
    public function setBezeichnungForStringSetsBezeichnung()
    {
        $this->subject->setBezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bezeichnung',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBeschreibungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBeschreibung()
        );
    }

    /**
     * @test
     */
    public function setBeschreibungForStringSetsBeschreibung()
    {
        $this->subject->setBeschreibung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'beschreibung',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPreisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPreis()
        );
    }

    /**
     * @test
     */
    public function setPreisForFloatSetsPreis()
    {
        $this->subject->setPreis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'preis',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getLagermengeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getLagermenge()
        );
    }

    /**
     * @test
     */
    public function setLagermengeForIntSetsLagermenge()
    {
        $this->subject->setLagermenge(12);

        self::assertAttributeEquals(
            12,
            'lagermenge',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBilddateiReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBilddatei()
        );
    }

    /**
     * @test
     */
    public function setBilddateiForStringSetsBilddatei()
    {
        $this->subject->setBilddatei('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bilddatei',
            $this->subject
        );
    }
}
