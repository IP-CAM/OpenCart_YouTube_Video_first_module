<?php  
class ControllerModuleMyModule extends Controller {
	protected function index($setting) {
	    
		$this->language->load('module/my_module');
 
    	$this->data['heading_title'] = sprintf($this->language->get('heading_title'), $this->config->get('config_name'));
    	
		$this->data['link'] = $setting['link'];

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/my_module.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/my_module.tpl';
		} else {
			$this->template = 'default/template/module/my_module.tpl';
		}
		
		$this->render();
	}
}
?>