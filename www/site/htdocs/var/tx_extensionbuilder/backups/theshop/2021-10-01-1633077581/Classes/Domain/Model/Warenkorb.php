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
 * Warenkorb
 */
class Warenkorb extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * kundennummer
     *
     * @var int
     */
    protected $kundennummer = 0;

    /**
     * artikelnummer
     *
     * @var int
     */
    protected $artikelnummer = 0;

    /**
     * anzahl
     *
     * @var int
     */
    protected $anzahl = 0;

    /**
     * preis
     *
     * @var int
     */
    protected $preis = 0;

    /**
     * status
     *
     * @var string
     */
    protected $status = '';

    /**
     * Returns the kundennummer
     *
     * @return int $kundennummer
     */
    public function getKundennummer()
    {
        return $this->kundennummer;
    }

    /**
     * Sets the kundennummer
     *
     * @param int $kundennummer
     * @return void
     */
    public function setKundennummer(int $kundennummer)
    {
        $this->kundennummer = $kundennummer;
    }

    /**
     * Returns the artikelnummer
     *
     * @return int $artikelnummer
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }

    /**
     * Sets the artikelnummer
     *
     * @param int $artikelnummer
     * @return void
     */
    public function setArtikelnummer(int $artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;
    }

    /**
     * Returns the anzahl
     *
     * @return int $anzahl
     */
    public function getAnzahl()
    {
        return $this->anzahl;
    }

    /**
     * Sets the anzahl
     *
     * @param int $anzahl
     * @return void
     */
    public function setAnzahl(int $anzahl)
    {
        $this->anzahl = $anzahl;
    }

    /**
     * Returns the preis
     *
     * @return int $preis
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Sets the preis
     *
     * @param int $preis
     * @return void
     */
    public function setPreis(int $preis)
    {
        $this->preis = $preis;
    }

    /**
     * Returns the status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     *
     * @param string $status
     * @return void
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
}
