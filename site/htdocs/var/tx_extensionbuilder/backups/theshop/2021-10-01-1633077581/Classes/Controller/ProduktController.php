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
 * ProduktController
 */
class ProduktController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * produktRepository
     *
     * @var \AxelSchaefer\Theshop\Domain\Repository\ProduktRepository
     */
    protected $produktRepository = null;

    /**
     * @param \AxelSchaefer\Theshop\Domain\Repository\ProduktRepository $produktRepository
     */
    public function injectProduktRepository(\AxelSchaefer\Theshop\Domain\Repository\ProduktRepository $produktRepository)
    {
        $this->produktRepository = $produktRepository;
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
        $produkts = $this->produktRepository->findAll();
        $this->view->assign('produkts', $produkts);
    }

    /**
     * action show
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Produkt $produkt
     * @return string|object|null|void
     */
    public function showAction(\AxelSchaefer\Theshop\Domain\Model\Produkt $produkt)
    {
        $this->view->assign('produkt', $produkt);
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
     * @param \AxelSchaefer\Theshop\Domain\Model\Produkt $newProdukt
     * @return string|object|null|void
     */
    public function createAction(\AxelSchaefer\Theshop\Domain\Model\Produkt $newProdukt)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->produktRepository->add($newProdukt);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Produkt $produkt
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("produkt")
     * @return string|object|null|void
     */
    public function editAction(\AxelSchaefer\Theshop\Domain\Model\Produkt $produkt)
    {
        $this->view->assign('produkt', $produkt);
    }

    /**
     * action update
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Produkt $produkt
     * @return string|object|null|void
     */
    public function updateAction(\AxelSchaefer\Theshop\Domain\Model\Produkt $produkt)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->produktRepository->update($produkt);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Produkt $produkt
     * @return string|object|null|void
     */
    public function deleteAction(\AxelSchaefer\Theshop\Domain\Model\Produkt $produkt)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->produktRepository->remove($produkt);
        $this->redirect('list');
    }
}
