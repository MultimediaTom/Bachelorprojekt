<?php

declare(strict_types=1);

namespace AxelSchaefer\Theshop\Controller;


/**
 * This file is part of the "theshop" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 
 */

/**
 * KundeController
 */
class KundeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * kundeRepository
     *
     * @var \AxelSchaefer\Theshop\Domain\Repository\KundeRepository
     */
    protected $kundeRepository = null;

    /**
     * @param \AxelSchaefer\Theshop\Domain\Repository\KundeRepository $kundeRepository
     */
    public function injectKundeRepository(\AxelSchaefer\Theshop\Domain\Repository\KundeRepository $kundeRepository)
    {
        $this->kundeRepository = $kundeRepository;
    }

    /**
     * action index
     *
     * @return string|object|null|void
     */
    public function indexAction()
    {
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $kundes = $this->kundeRepository->findAll();
        $this->view->assign('kundes', $kundes);
    }

    /**
     * action show
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Kunde $kunde
     * @return string|object|null|void
     */
    public function showAction(\AxelSchaefer\Theshop\Domain\Model\Kunde $kunde)
    {
        $this->view->assign('kunde', $kunde);
    }

    /**
     * action new
     *
     * @return string|object|null|void
     */
    public function newAction()
    {
    }

    /**
     * action create
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Kunde $newKunde
     * @return string|object|null|void
     */
    public function createAction(\AxelSchaefer\Theshop\Domain\Model\Kunde $newKunde)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->kundeRepository->add($newKunde);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Kunde $kunde
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("kunde")
     * @return string|object|null|void
     */
    public function editAction(\AxelSchaefer\Theshop\Domain\Model\Kunde $kunde)
    {
        $this->view->assign('kunde', $kunde);
    }

    /**
     * action update
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Kunde $kunde
     * @return string|object|null|void
     */
    public function updateAction(\AxelSchaefer\Theshop\Domain\Model\Kunde $kunde)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->kundeRepository->update($kunde);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Kunde $kunde
     * @return string|object|null|void
     */
    public function deleteAction(\AxelSchaefer\Theshop\Domain\Model\Kunde $kunde)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->kundeRepository->remove($kunde);
        $this->redirect('list');
    }
}
