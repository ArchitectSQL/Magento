<?php

namespace Packt\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Index action
     *
     * @return $this
     */
    /** @var \Magento\Framework\View\Result\PageFactory */
    /**	@var	\Magento\Framework\View\Result\PageFactory		*/
    protected	$resultPageFactory;
    //protected  $_context;
    public	function __construct(
        \Magento\Framework\App\Action\Context	$context,
        \Magento\Framework\View\Result\PageFactory	$resultPageFactory
    )	{
        $this->resultPageFactory	=	$resultPageFactory;
        //$this->_context = $context;
        parent::__construct($context);
    }
    public	function	execute()
    {
        $resultPage	=	$this->resultPageFactory->create();
        return	$resultPage;
    }
}