<?php

namespace Page\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Authentication\Adapter\DbTable as AuthAdapter;

class PageController extends AbstractActionController
{
    public function homeAction()
    {
        $this->layout('layout/home');

//        $slider = $this->getSliderService()->findOneBySlug('slider-glowny');
//        $items = $slider->getItems();


        $viewParams = array();
//        $viewParams['items'] = $items;
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

    /**
     * @return \CmsIr\Slider\Service\SliderService
     */
    public function getSliderService()
    {
        return $this->getServiceLocator()->get('CmsIr\Slider\Service\SliderService');
    }

}
