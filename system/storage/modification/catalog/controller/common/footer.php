<?php
class ControllerCommonFooter extends Controller {
	public function index() {

			if ($this->config->get('theme_materialize_status') == 1) {
				$materialize = $this->config->get('theme_materialize');

				$data['footer_title'] = $materialize[$this->config->get('config_language_id')]['footer_title'];
				$data['footer_description'] = $materialize[$this->config->get('config_language_id')]['footer_description'];
				$data['footer_contact'] = $this->config->get('theme_materialize_footer_contact');
				$data['telephone'] = $this->config->get('config_telephone');
				$data['open'] = nl2br($this->config->get('config_open'));
				$data['email'] = $this->config->get('config_email');
				$data['address'] = nl2br($this->config->get('config_address'));
				$data['img_loader'] = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
				$data['sn_text'] = $materialize[$this->config->get('config_language_id')]['sn_text'];

				$this->load->model('tool/image');

				$this->load->model('extension/materialize/materialize');

				$data['social_network'] = true;

				$data['social_icons'] = array();

				$results = $this->model_extension_materialize_materialize->getSocialIcons();

				foreach ($results as $result) {
					if (is_file(DIR_IMAGE . $result['icon'])) {
						$data['social_icons'][] = array(
							'title'	=> $result['title'],
							'link'	=> $result['link'],
							'icon'	=> $this->model_tool_image->resize($result['icon'], 75, 75)
						);
					}
				}

				if ($this->config->get('theme_materialize_sn_index') == 1) {
					$data['no_index'] = ' nofollow';
				} else {
					$data['no_index'] = false;
				}

				if (empty($data['sn_text']) && empty($data['social_icons'])) {
					$data['social_network'] = false;
				}

				$data['color_footer'] = $this->config->get('theme_materialize_color_footer');
				$data['color_footer_text'] = $this->config->get('theme_materialize_color_footer_text');
				$data['color_btt'] = $this->config->get('theme_materialize_color_btt_btn');
				$data['color_btt_text'] = $this->config->get('theme_materialize_color_btt_btn_text');
			}
			
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');
		
		return $this->load->view('common/footer', $data);
	}
}
