<?php
/**
 * @category   Webcreta
 * @package    Webcreta_Video
 * @author     sp.webcreta@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Webcreta\Video\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\NotFoundException;
use Webcreta\Video\Block\VideoView;

class View extends \Magento\Framework\App\Action\Action
{
	protected $_videoview;

	public function __construct(
        Context $context,
        VideoView $videoview
    ) {
        $this->_videoview = $videoview;
        parent::__construct($context);
    }

	public function execute()
    {
    	if(!$this->_videoview->getSingleData()){
    		throw new NotFoundException(__('Parameter is incorrect.'));
    	}
    	
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
