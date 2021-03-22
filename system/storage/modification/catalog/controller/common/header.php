<?php
class ControllerCommonHeader extends Controller {
	public function index() {
$this->load->language('common/materialize');

			$data['compare'] = $this->url->link('product/compare');
			$data['text_compare'] = sprintf((isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
			
$data['img_loader'] = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';

			$data['delivery'] = $this->url->link('information/information' . '&information_id=6');
			$data['about'] = $this->url->link('information/information' . '&information_id=4');
			

			if ($this->config->get('module_blog_status') == 1) {
				$data['blog'] = $this->url->link('extension/materialize/blog/blog');
			} else {
				$data['blog'] = '';
			}
			

			if ($this->config->get('theme_materialize_status') == 1) {
				$data['color_browser_bar'] = $this->config->get('theme_materialize_color_browser_bar_hex');
				$data['color_background'] = $this->config->get('theme_materialize_color_background');
				$data['color_top_menu'] = $this->config->get('theme_materialize_color_top_menu');
				$data['color_top_menu_text'] = $this->config->get('theme_materialize_color_top_menu_text');
				$data['color_header'] = $this->config->get('theme_materialize_color_header');
				$data['color_header_text'] = $this->config->get('theme_materialize_color_header_text');
				$data['color_nav_btn'] = $this->config->get('theme_materialize_color_nav_btn');
				$data['color_nav_btn_text'] = $this->config->get('theme_materialize_color_nav_btn_text');
				$data['color_navigation'] = $this->config->get('theme_materialize_color_navigation');
				$data['color_sidebar'] = $this->config->get('theme_materialize_color_sidebar');
				$data['color_sidebar_text'] = $this->config->get('theme_materialize_color_sidebar_text');
				$data['color_compare'] = $this->config->get('theme_materialize_color_compare_btn');
				$data['color_compare_text'] = $this->config->get('theme_materialize_color_compare_btn_text');
				$data['color_compare_total'] = $this->config->get('theme_materialize_color_compare_total_btn');
				$data['color_compare_total_text'] = $this->config->get('theme_materialize_color_compare_total_btn_text');
			}
			

			if ($this->config->get('module_callback_status') == 1) {
				$module_callback = $this->config->get('module_callback');

				$data['callback_status'] = true;
				$data['callback_title'] = $module_callback[$this->config->get('config_language_id')]['title'];
				$data['callback_module'] = $this->load->controller('extension/module/callback', $data);
			} else {
				$data['callback_status'] = false;
				$data['callback_module'] = '';
			}
			

			$this->load->model('tool/image');

			$this->load->model('extension/materialize/materialize');

			$data['social_links'] = $this->model_extension_materialize_materialize->getSocialLinks();

			$facebook_share_image_width = 600;
			$facebook_share_image_height = 315;

			if($this->document->getImage()){
				$facebook_share_image = $this->model_tool_image->resize($this->document->getImage(), $facebook_share_image_width, $facebook_share_image_height);
			} else {
				$facebook_share_image = $this->model_tool_image->resize($this->config->get('config_logo'), $facebook_share_image_width, $facebook_share_image_height);
			}

			$data['facebook_site_name'] = $this->config->get('config_name');
			$data['facebook_share_url'] = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			$data['facebook_share_type'] = ($this->document->getType()) ? $this->document->getType() : 'website';
			$data['facebook_share_title'] = $this->document->getTitle();
			$data['facebook_share_description'] = $this->document->getDescription();
			$data['facebook_share_image'] = $facebook_share_image;
			$data['facebook_share_image_width'] = $facebook_share_image_width;
			$data['facebook_share_image_height'] = $facebook_share_image_height;
			$data['facebook_product_price_amount'] = $this->document->getPrice();
			$data['facebook_product_price_currency'] = $this->config->get('config_currency');
			

			if ($this->config->get('theme_materialize_cache_css') == 1) {
				$css = $this->cache->get('compressed.css');

				if (!$css) {
					$css = file_get_contents('catalog/view/theme/materialize/stylesheet/style.css');
					$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
					$css = str_replace(': ', ':', $css);
					$css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css);

					$this->cache->set('compressed.css', $css);
				}

				$data['css'] = $css;
			} else {
				$css = file_get_contents('catalog/view/theme/materialize/stylesheet/style.css');
				$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
				$css = str_replace(': ', ':', $css);
				$css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css);

				$data['css'] = $css;
			}
			
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			
			$this->load->model('tool/image');

			$file = ($server . 'image/' . $this->config->get('config_icon'));
			$info = getimagesize($file);
			$icon_type = isset($info['mime']) ? $info['mime'] : '';

			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 16, 16), 'icon', $icon_type, '16x16');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 32, 32), 'icon', $icon_type, '32x32');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 48, 48), 'icon', $icon_type, '48x48');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 96, 96), 'icon', $icon_type, '96x96');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 128, 128), 'icon', $icon_type, '128x128');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 160, 160), 'icon', $icon_type, '160x160');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 196, 196), 'icon', $icon_type, '196x196');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 228, 228), 'icon', $icon_type, '228x228');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 256, 256), 'icon', $icon_type, '256x256');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 57, 57), 'apple-touch-icon', $icon_type, '57x57');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 60, 60), 'apple-touch-icon', $icon_type, '60x60');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 72, 72), 'apple-touch-icon', $icon_type, '72x72');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 76, 76), 'apple-touch-icon', $icon_type, '76x76');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 114, 114), 'apple-touch-icon', $icon_type, '114x114');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 120, 120), 'apple-touch-icon', $icon_type, '120x120');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 144, 144), 'apple-touch-icon', $icon_type, '144x144');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 152, 152), 'apple-touch-icon', $icon_type, '152x152');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 167, 167), 'apple-touch-icon', $icon_type, '167x167');
			$this->document->addLink($this->model_tool_image->resize($this->config->get('config_icon'), 180, 180), 'apple-touch-icon', $icon_type, '180x180');
			
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

			$data['email'] = $this->config->get('config_email');
			$data['open'] = nl2br($this->config->get('config_open'));
			

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');

			$this->load->model('tool/image');
			$file = $server . 'image/' . $this->config->get('config_logo');
			$info = getimagesize($file);
			$data['logo_width']  = $info[0];
			$data['logo_height'] = $info[1];
			
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
