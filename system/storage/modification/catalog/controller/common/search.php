<?php
class ControllerCommonSearch extends Controller {

			public function autocomplete() {
				$json = array();

				$this->load->model('catalog/product');
				$this->load->model('tool/image');

				$filter_name = $this->request->get['filter_name'];

				$filter_data = array(
					'filter_name'	=> $filter_name,
					'start'			=> 0,
					'limit'			=> 5
				);

				$results = $this->model_catalog_product->getProductsSearch($filter_data);

				foreach ($results as $result) {
					if (is_file(DIR_IMAGE . $result['image'])) {
						$image = $this->model_tool_image->resize($result['image'], 40, 40);
						$img ='<img src='.$image.' class="right circle">';
					} else {
						$image = $this->model_tool_image->resize('no_image.png', 40, 40);
						$img ='<img src='.$image.' class="right circle" width="40" height="40">';
					}
					$json[] = array(
						'product_id'	=> $result['product_id'],
						'name'			=> strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
						'img'			=> $img
					);
				}

				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
			}
			
	public function index() {
$data['img_loader'] = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
$data['product_path'] = $this->url->link('product/product');

			if ($this->config->get('theme_materialize_status') == 1) {
				$data['color_search'] = $this->config->get('theme_materialize_color_search');
			}
			
		$this->load->language('common/search');

		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}

		return $this->load->view('common/search', $data);
	}
}