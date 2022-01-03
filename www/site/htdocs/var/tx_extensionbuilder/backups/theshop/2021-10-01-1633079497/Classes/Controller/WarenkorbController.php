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
 * WarenkorbController
 */
class WarenkorbController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * warenkorbRepository
     *
     * @var \AxelSchaefer\Theshop\Domain\Repository\WarenkorbRepository
     */
    protected $warenkorbRepository = null;

    /**
     * @param \AxelSchaefer\Theshop\Domain\Repository\WarenkorbRepository $warenkorbRepository
     */
    public function injectWarenkorbRepository(\AxelSchaefer\Theshop\Domain\Repository\WarenkorbRepository $warenkorbRepository)
    {
        $this->warenkorbRepository = $warenkorbRepository;
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
        $warenkorbs = $this->warenkorbRepository->findAll();
        $this->view->assign('warenkorbs', $warenkorbs);
    }

    /**
     * action show
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Warenkorb $warenkorb
     * @return string|object|null|void
     */
    public function showAction(\AxelSchaefer\Theshop\Domain\Model\Warenkorb $warenkorb)
    {
        $this->view->assign('warenkorb', $warenkorb);
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
     * @param \AxelSchaefer\Theshop\Domain\Model\Warenkorb $newWarenkorb
     * @return string|object|null|void
     */
    public function createAction(\AxelSchaefer\Theshop\Domain\Model\Warenkorb $newWarenkorb)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->warenkorbRepository->add($newWarenkorb);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Warenkorb $warenkorb
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("warenkorb")
     * @return string|object|null|void
     */
    public function editAction(\AxelSchaefer\Theshop\Domain\Model\Warenkorb $warenkorb)
    {
        $this->view->assign('warenkorb', $warenkorb);
    }

    /**
     * action update
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Warenkorb $warenkorb
     * @return string|object|null|void
     */
    public function updateAction(\AxelSchaefer\Theshop\Domain\Model\Warenkorb $warenkorb)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->warenkorbRepository->update($warenkorb);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \AxelSchaefer\Theshop\Domain\Model\Warenkorb $warenkorb
     * @return string|object|null|void
     */
    public function deleteAction(\AxelSchaefer\Theshop\Domain\Model\Warenkorb $warenkorb)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->warenkorbRepository->remove($warenkorb);
        $this->redirect('list');
    }
}
