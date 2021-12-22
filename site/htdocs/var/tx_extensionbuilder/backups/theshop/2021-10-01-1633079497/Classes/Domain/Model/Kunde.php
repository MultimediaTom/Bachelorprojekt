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
 * Kunde
 */
class Kunde extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * kundennummer
     *
     * @var int
     */
    protected $kundennummer = 0;

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * vorname
     *
     * @var string
     */
    protected $vorname = '';

    /**
     * adresse
     *
     * @var string
     */
    protected $adresse = '';

    /**
     * bestellung
     *
     * @var \AxelSchaefer\Theshop\Domain\Model\Warenkorb
     */
    protected $bestellung = null;

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
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the vorname
     *
     * @return string $vorname
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Sets the vorname
     *
     * @param string $vorname
     * @return void
     */
    public function setVorname(string $vorname)
    {
        $this->vorname = $vorname;
    }

    /**
     * Returns the adresse
     *
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets the adresse
     *
     * @param string $adresse
     * @return void
     */
    public function setAdresse(string $adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Returns the bestellung
     *
     * @return \AxelSchaefer\Theshop\Domain\Model\Warenkorb $bestellung
     */
    public function getBestellung()
    {
        return $this->bestellung;
    }

    /**
     * Sets the bestellung
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Warenkorb $bestellung
     * @return void
     */
    public function setBestellung(\AxelSchaefer\Theshop\Domain\Model\Warenkorb $bestellung)
    {
        $this->bestellung = $bestellung;
    }
}
