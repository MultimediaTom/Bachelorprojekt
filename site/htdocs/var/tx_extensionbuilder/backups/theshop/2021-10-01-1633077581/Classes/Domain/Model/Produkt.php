<?php

declare(strict_types=1);

namespace AxelSchaefer\Theshop\Domain\Model;


/**
 * This file is part of the "theshop" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 
 */

/**
 * Produkt
 */
class Produkt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * artikelnummer
     *
     * @var string
     */
    protected $artikelnummer = '';

    /**
     * bezeichnung
     *
     * @var string
     */
    protected $bezeichnung = '';

    /**
     * beschreibung
     *
     * @var string
     */
    protected $beschreibung = '';

    /**
     * preis
     *
     * @var float
     */
    protected $preis = 0.0;

    /**
     * lagermenge
     *
     * @var int
     */
    protected $lagermenge = 0;

    /**
     * bilddatei
     *
     * @var string
     */
    protected $bilddatei = '';

    /**
     * Returns the artikelnummer
     *
     * @return string $artikelnummer
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }

    /**
     * Sets the artikelnummer
     *
     * @param string $artikelnummer
     * @return void
     */
    public function setArtikelnummer(string $artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;
    }

    /**
     * Returns the bezeichnung
     *
     * @return string $bezeichnung
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * Sets the bezeichnung
     *
     * @param string $bezeichnung
     * @return void
     */
    public function setBezeichnung(string $bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * Returns the beschreibung
     *
     * @return string $beschreibung
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * Sets the beschreibung
     *
     * @param string $beschreibung
     * @return void
     */
    public function setBeschreibung(string $beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

    /**
     * Returns the preis
     *
     * @return float $preis
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Sets the preis
     *
     * @param float $preis
     * @return void
     */
    public function setPreis(float $preis)
    {
        $this->preis = $preis;
    }

    /**
     * Returns the lagermenge
     *
     * @return int $lagermenge
     */
    public function getLagermenge()
    {
        return $this->lagermenge;
    }

    /**
     * Sets the lagermenge
     *
     * @param int $lagermenge
     * @return void
     */
    public function setLagermenge(int $lagermenge)
    {
        $this->lagermenge = $lagermenge;
    }

    /**
     * Returns the bilddatei
     *
     * @return string $bilddatei
     */
    public function getBilddatei()
    {
        return $this->bilddatei;
    }

    /**
     * Sets the bilddatei
     *
     * @param string $bilddatei
     * @return void
     */
    public function setBilddatei(string $bilddatei)
    {
        $this->bilddatei = $bilddatei;
    }
}
