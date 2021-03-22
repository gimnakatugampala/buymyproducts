<?php
class ControllerProductProduct extends Controller {
	private $error = array();

	public function index() {

			$this->load->language('product/materialize');
			$this->load->language('materialize/materialize');
			
$data['img_loader'] = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
		$this->load->language('product/product');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

$data['quickorder'] = $this->load->controller('extension/module/quickorder', $data);
		$this->load->model('catalog/category');

		if (isset($this->request->get['path'])) {
			$path = '';

			$parts = explode('_', (string)$this->request->get['path']);

			$category_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = $path_id;
				} else {
					$path .= '_' . $path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = array(
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'path=' . $path)
					);
				}
			}

			// Set the last category breadcrumb
			$category_info = $this->model_catalog_category->getCategory($category_id);

			if ($category_info) {
				$url = '';

				if (isset($this->request->get['sort'])) {
					$url .= '&sort=' . $this->request->get['sort'];
				}

				if (isset($this->request->get['order'])) {
					$url .= '&order=' . $this->request->get['order'];
				}

				if (isset($this->request->get['page'])) {
					$url .= '&page=' . $this->request->get['page'];
				}

				if (isset($this->request->get['limit'])) {
					$url .= '&limit=' . $this->request->get['limit'];
				}

				$data['breadcrumbs'][] = array(
					'text' => $category_info['name'],
					'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url)
				);
			}
		}

		$this->load->model('catalog/manufacturer');

		if (isset($this->request->get['manufacturer_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_brand'),
				'href' => $this->url->link('product/manufacturer')
			);

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($this->request->get['manufacturer_id']);

			if ($manufacturer_info) {
				$data['breadcrumbs'][] = array(
					'text' => $manufacturer_info['name'],
					'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
				);
			}
		}

		if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_search'),
				'href' => $this->url->link('product/search', $url)
			);
		}

		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);


			if ($this->config->get('module_customtabs_status') == 1) {
				$data['customtabs'] = array();

				$results = $this->model_catalog_product->getProducttabs($this->request->get['product_id']);

				foreach ($results as $result) {
					$data['customtabs'][] = array(
						'title'			=> $result['title'],
						'description'	=> html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'),
					);
				}
			} else {
				$data['customtabs'] = false;
			}
			
		if ($product_info) {

			if ($this->config->get('module_additionalfields_status') == 1) {
				$data['additionalfields'] = array();

				$results = $this->model_catalog_product->getProductfields($this->request->get['product_id']);

				foreach ($results as $result) {
					$data['additionalfields'][] = array(
						'title'	=> $result['title'],
						'text'	=> $result['text'],
					);
				}
			} else {
				$data['additionalfields'] = false;
			}
			

			$data['product_spec'] = $this->model_catalog_product->getProductSpec($product_id);
			$data['end_promotion'] = date($this->language->get('date_format_short'), strtotime($this->model_catalog_product->getProductSpec($product_id)));
			

			$this->load->model('account/wishlist');

			$wishlist_product = $this->model_account_wishlist->selectWishlist($product_id);

			if (isset($wishlist_product)) {
				$data['wishlist_product'] = $wishlist_product;
			} else {
				$data['wishlist_product'] = '';
			}
			

			if ($this->config->get('module_sizechart_status') == 1) {
				$data['sizechart'] = $this->load->controller('extension/module/sizechart', $data);
			} else {
				$data['sizechart'] = false;
			}
			

			$data['labels'] = array();

			if ($this->config->get('module_label_status') == 1) {
				$results = $this->model_catalog_product->getProductLabels($this->request->get['product_id']);

				foreach ($results as $result) {
					$data['labels'][] = array(
						'name'			=> $result['name'],
						'color'			=> $result['label_color'],
						'color_text'	=> $result['label_color_text']
					);
				}
			}
			

			$this->document->setType('product');
			$this->document->setImage($product_info['image']);
			$this->document->setPrice($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')));
			
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $product_info['name'],
				'href' => $this->url->link('product/product', $url . '&product_id=' . $this->request->get['product_id'])
			);

			$this->document->setTitle($product_info['meta_title']);
			
			$this->document->setDescription($product_info['meta_description']);
			$this->load->model('catalog/category');
			$catprod = array();
			$product_category = $this->model_catalog_product->getCategories($product_id);
			foreach ($product_category as $product_cat) {
				$category_info = $this->model_catalog_category->getCategory($product_cat['category_id']);
				if ($category_info) {
					$data['category_products'][] = array(
						'name'	=> $category_info['name'],
						'href'	=> $this->url->link('product/category', 'path=' . $category_info['category_id'])
					);
				}
			}
			
			$this->document->setKeywords($product_info['meta_keyword']);
			$this->document->addLink($this->url->link('product/product', 'product_id=' . $this->request->get['product_id']), 'canonical');
			$this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
			$this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
			$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

			$data['heading_title'] = $product_info['name'];

			$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
			$data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true));

			$this->load->model('catalog/review');

			$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);

			$data['product_id'] = (int)$this->request->get['product_id'];
			$data['manufacturer'] = $product_info['manufacturer'];
			$data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);
			$data['model'] = $product_info['model'];
			$data['reward'] = $product_info['reward'];
			$data['points'] = $product_info['points'];

			$data['stock_status_id'] = $product_info['stock_status_id'];
			
$data['pricecurrency'] = $this->session->data['currency'];
			$data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');


			if ($product_info['quantity'] <= 0) {
				$data['add_cart'] = false;
			} else {
				$data['add_cart'] = true;
			}
			
			if ($product_info['quantity'] <= 0) {
				$data['stock'] = $product_info['stock_status'];

			if($data['stock_status_id'] == 5) {
				$data['stock_color'] = "red";
				$data['stock_status'] = "http://schema.org/OutOfStock";
			} elseif ($data['stock_status_id'] == 8) {
				$data['stock_color'] = "orange";
				$data['stock_status'] = "http://schema.org/PreOrder";
			} elseif ($data['stock_status_id'] == 6) {
				$data['stock_color'] = "lime";
				$data['stock_status'] = "http://schema.org/OutOfStock";
			} elseif ($data['stock_status_id'] == 7) {
				$data['stock_color'] = "green";
				$data['stock_status'] = "http://schema.org/InStock";
			} else {
				$data['stock_color'] = "grey";
				$data['stock_status'] = "";
			}
			
			} elseif ($this->config->get('config_stock_display')) {
				$data['stock'] = $product_info['quantity'];

			$data['stock_color'] = "green";
			$data['stock_status'] = "http://schema.org/InStock";
			
			} else {
				$data['stock'] = $this->language->get('text_instock');

			$data['stock_color'] = "green";
			$data['stock_status'] = "http://schema.org/InStock";
			
			}

			$this->load->model('tool/image');

			$manufacturer_image = $this->model_catalog_manufacturer->getManufacturer($product_info['manufacturer_id']);
			if ($manufacturer_image) {
				$data['manufacturers_img'] = $this->model_tool_image->resize($manufacturer_image['image'], 100, 100);
				$data['img_loader'] = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
			} else {
				$data['manufacturers_img'] = false;
			}
			

			if ($this->config->get('theme_materialize_status') == 1) {
				$materialize = $this->config->get('theme_materialize');

				$data['payment_method'] = $materialize[$this->config->get('config_language_id')]['payment_text'];

				if ($this->config->get('theme_materialize_payment_image') == true) {
					$data['payment_image'] = $this->model_tool_image->resize($this->config->get('theme_materialize_payment_image'), $this->config->get('theme_materialize_payment_image_width'), $this->config->get('theme_materialize_payment_image_height'));
				} else {
					$data['payment_image'] = '';
				}

				if ($this->config->get('theme_materialize_show_model') == 1) {
					$data['model'] = $product_info['model'];
				} else {
					$data['model'] = '';
				}

				if ($this->config->get('theme_materialize_show_sku') == 1) {
					$data['sku'] = $product_info['sku'];
				} else {
					$data['sku'] = '';
				}

				if ($this->config->get('theme_materialize_show_upc') == 1) {
					$data['upc'] = $product_info['upc'];
				} else {
					$data['upc'] = '';
				}

				if ($this->config->get('theme_materialize_show_ean') == 1) {
					$data['ean'] = $product_info['ean'];
				} else {
					$data['ean'] = '';
				}

				if ($this->config->get('theme_materialize_show_jan') == 1) {
					$data['jan'] = $product_info['jan'];
				} else {
					$data['jan'] = '';
				}

				if ($this->config->get('theme_materialize_show_isbn') == 1) {
					$data['isbn'] = $product_info['isbn'];
				} else {
					$data['isbn'] = '';
				}

				if ($this->config->get('theme_materialize_show_mpn') == 1) {
					$data['mpn'] = $product_info['mpn'];
				} else {
					$data['mpn'] = '';
				}

				if ($this->config->get('theme_materialize_show_location') == 1) {
					$data['location'] = $product_info['location'];
				} else {
					$data['location'] = '';
				}

				if ($this->config->get('theme_materialize_show_dimensions') == 1) {
					$data['dimensions_length'] = $this->length->format($product_info['length'], $product_info['length_class_id']);
					$data['dimensions_width'] = $this->length->format($product_info['width'], $product_info['length_class_id']);
					$data['dimensions_height'] = $this->length->format($product_info['height'], $product_info['length_class_id']);
				} else {
					$data['dimensions_length'] = '';
					$data['dimensions_width'] = '';
					$data['dimensions_height'] = '';
				}

				if ($this->config->get('theme_materialize_show_weight') == 1) {
					$data['weight'] = $this->weight->format($product_info['weight'], $product_info['weight_class_id']);
				} else {
					$data['weight'] = '';
				}

				if (!empty($this->config->get('theme_materialize_remainder'))) {
					$data['remainder'] = $product_info['quantity'];

					if ($this->config->get('theme_materialize_remainder') == 'numerical') {
						$data['type_remainder'] = 'numerical';
					} elseif ($this->config->get('theme_materialize_remainder') == 'progressbar') {
						$data['type_remainder'] = 'progressbar';
						$data['progressbar_percent'] = round(($product_info['quantity'] * 100)/$this->config->get('theme_materialize_percent_remainder'));

						if ($data['progressbar_percent'] <= 5) {
							$data['progressbar_color'] = 'red accent-4';
						} elseif (($data['progressbar_percent'] > 5) && ($data['progressbar_percent'] <= 10)) {
							$data['progressbar_color'] = 'red';
						} elseif (($data['progressbar_percent'] > 11) && ($data['progressbar_percent'] <= 30)) {
							$data['progressbar_color'] = 'yellow';
						} elseif (($data['progressbar_percent'] > 30) && ($data['progressbar_percent'] <= 70)) {
							$data['progressbar_color'] = 'green lighten-1';
						} elseif (($data['progressbar_percent'] > 70) && ($data['progressbar_percent'] <= 100)) {
							$data['progressbar_color'] = 'green';
						} elseif ($data['progressbar_percent'] > 100) {
							$data['progressbar_color'] = 'green';
							$data['progressbar_percent'] = '100';
						}
					}
				} else {
					$data['type_remainder'] = '';
				}
			}
			

			if($product_info['image']){
				$share_image = $this->model_tool_image->resize($product_info['image'], 600, 315);
			} else {
				$share_image = $this->model_tool_image->resize($this->config->get('config_image'), 600, 315);
			}

			$this->document->setImage($share_image);
			

if ($this->config->get('theme_materialize_status') == 0) {
			if ($product_info['image']) {
				$data['popup'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			} else {
				$data['popup'] = '';
			}

			if ($product_info['image']) {
				$data['thumb'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
			} else {
				$data['thumb'] = '';
			}

			$data['images'] = array();

			$results = $this->model_catalog_product->getProductImages($this->request->get['product_id']);

			foreach ($results as $result) {
				$data['images'][] = array(
					'popup' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
					'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'))
				);
			}


			} else {
				$data['images'] = array();

				$data['data_size'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width').'x'.$this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height');

				if ($product_info['image']) {
					$data['images'][] = array(
						'popup' => $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
						'preview' => $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height')),
						'thumb' => $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height')),
						'zoom_id' => 0
					);
					$data['product_image'] = true;
				} else {
					$data['placeholder'] = $this->model_tool_image->resize('no_image.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
					$data['product_image'] = false;
				}

				$results = $this->model_catalog_product->getProductImages($this->request->get['product_id']);

				foreach ($results as $result) {
					$data['images'][] = array(
						'popup' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
						'preview' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height')),
						'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height')),
						'zoom_id' => $result['product_image_id']
					);
				}

				if (count($data['images']) > 1) {
					$data['thumb_images'] = true;
				} else {
					$data['thumb_images'] = false;
				}

				if ($this->config->get('theme_materialize_image_zoom') == 1) {
					$data['image_zoom'] = true;
				} else {
					$data['image_zoom'] = false;
				}

				$data['photoswipe_module'] = $this->load->controller('extension/module/photoswipe', $data);
			}
			
			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
$data['meta_price'] = $product_info['price'];
			} else {
				$data['price'] = false;
			}

			if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
				$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
$data['percent_discount'] = round(100-($product_info['special']/($product_info['price']/100)));
$data['meta_special'] = $product_info['special'];
				$tax_price = (float)$product_info['special'];
			} else {
				$data['special'] = false;
$data['percent_discount'] = false;
				$tax_price = (float)$product_info['price'];
			}

			if ($this->config->get('config_tax')) {
				$data['tax'] = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$data['tax'] = false;
			}

			$discounts = $this->model_catalog_product->getProductDiscounts($this->request->get['product_id']);

			$data['discounts'] = array();

			foreach ($discounts as $discount) {
				$data['discounts'][] = array(
					'quantity' => $discount['quantity'],
					'price'    => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
				);
			}

			$data['options'] = array();

			foreach ($this->model_catalog_product->getProductOptions($this->request->get['product_id']) as $option) {
				$product_option_value_data = array();

				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}

						$product_option_value_data[] = array(
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $price,
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}

				$data['options'][] = array(
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}

			if ($product_info['minimum']) {
				$data['minimum'] = $product_info['minimum'];
			} else {
				$data['minimum'] = 1;
			}

			$data['review_status'] = $this->config->get('config_review_status');

			if ($this->config->get('config_review_guest') || $this->customer->isLogged()) {
				$data['review_guest'] = true;
			} else {
				$data['review_guest'] = false;
			}

			if ($this->customer->isLogged()) {
				$data['customer_name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
			} else {
				$data['customer_name'] = '';
			}

			$data['reviews'] = sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']);
			$data['rating'] = (int)$product_info['rating'];
$data['reviewCount'] = sprintf((int)$product_info['reviews']);

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
			} else {
				$data['captcha'] = '';
			}

			$data['share'] = $this->url->link('product/product', 'product_id=' . (int)$this->request->get['product_id']);

			$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($this->request->get['product_id']);

			$data['products'] = array();

			$results = $this->model_catalog_product->getProductRelated($this->request->get['product_id']);

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
$percent_discount = round(100-($result['special']/($result['price']/100)));
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
$percent_discount = false;
					$tax_price = (float)$result['price'];
				}
	
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}


			$labels = array();

			if ($this->config->get('module_label_status') == 1) {
				$labels_array = $this->model_catalog_product->getProductLabels($result['product_id']);

				foreach ($labels_array as $label) {
					$labels[] = array(
						'name'			=> $label['name'],
						'color'			=> $label['label_color'],
						'color_text'	=> $label['label_color_text']
					);
				}
			}
			

			if ($result['quantity'] <= 0) {
				$result['quantity'] = false;
			} else {
				$result['quantity'] = true;
			}
			
				$data['products'][] = array(
'add_cart'	=> $result['quantity'],
'labels'	=> $labels,
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
'percent_discount'	=> $percent_discount,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			$data['tags'] = array();

			if ($product_info['tag']) {
				$tags = explode(',', $product_info['tag']);

				foreach ($tags as $tag) {
					$data['tags'][] = array(
						'tag'  => trim($tag),
						'href' => $this->url->link('product/search', 'tag=' . trim($tag))
					);
				}
			}

			$data['recurrings'] = $this->model_catalog_product->getProfiles($this->request->get['product_id']);

			$this->model_catalog_product->updateViewed($this->request->get['product_id']);
			
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('product/product', $data));
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/product', $url . '&product_id=' . $product_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function review() {
$data['img_loader'] = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
		$this->load->language('product/product');

		$this->load->model('catalog/review');

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['reviews'] = array();

		$review_total = $this->model_catalog_review->getTotalReviewsByProductId($this->request->get['product_id']);

		$results = $this->model_catalog_review->getReviewsByProductId($this->request->get['product_id'], ($page - 1) * 5, 5);

		foreach ($results as $result) {
			$data['reviews'][] = array(
				'author'     => $result['author'],
				'text'       => nl2br($result['text']),
				'rating'     => (int)$result['rating'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}

		$pagination = new MaterializePagination();
		$pagination->total = $review_total;
		$pagination->page = $page;
		$pagination->limit = 5;
		$pagination->url = $this->url->link('product/product/review', 'product_id=' . $this->request->get['product_id'] . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * 5) + 1 : 0, ((($page - 1) * 5) > ($review_total - 5)) ? $review_total : ((($page - 1) * 5) + 5), $review_total, ceil($review_total / 5));

		$this->response->setOutput($this->load->view('product/review', $data));
	}

	public function write() {
		$this->load->language('product/product');

		$json = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
				$json['error'] = $this->language->get('error_name');
			}

			if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
				$json['error'] = $this->language->get('error_text');
			}

			if (empty($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
				$json['error'] = $this->language->get('error_rating');
			}

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

				if ($captcha) {
					$json['error'] = $captcha;
				}
			}

			if (!isset($json['error'])) {
				$this->load->model('catalog/review');

				$this->model_catalog_review->addReview($this->request->get['product_id'], $this->request->post);

				$json['success'] = $this->language->get('text_success');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}


			public function updatePrice() {
				$json = array();

				$this->load->model('catalog/product');

				$product_info = $this->model_catalog_product->getProduct($this->request->get['product_id']);
				$option_price = 0;

				if(isset($this->request->post['option']) && $this->request->post['option']) {
					foreach($this->request->post['option'] as $product_option_id => $value) {
						$result = $this->model_catalog_product->getUpdateOptionsList($this->request->get['product_id'], $product_option_id);
						if($result) {
							if($result['type'] == 'select' || $result['type'] == 'radio') {
								$option_values = $this->model_catalog_product->getUpdateOptionValues($value, $product_option_id);
								if($option_values) {
									if ($option_values['price_prefix'] == '+') {
										$option_price += $option_values['price'];
									} elseif ($option_values['price_prefix'] == '-') {
										$option_price -= $option_values['price'];
									}
								}
							} elseif ($result['type'] == 'checkbox' && is_array($value)) {
								foreach ($value as $product_option_value_id) {
									$option_values = $this->model_catalog_product->getUpdateOptionChcekboxValues($product_option_value_id, $product_option_id);
									if($option_values) {
										if ($option_values['price_prefix'] == '+') {
											$option_price += $option_values['price'];
										} elseif ($option_values['price_prefix'] == '-') {
											$option_price -= $option_values['price'];
										}
									}
								}
							}
						}
					}
				}

				$price = $product_info['price'];
				$new_price_found = 0;

				$discount_amount = $this->model_catalog_product->getDiscountAmountForUpdatePrice($this->request->get['product_id'], $this->request->post['quantity']);

				if ($discount_amount) {
					$price = $discount_amount;
				}

				if ($product_info['special']) {
					$price = $product_info['special'];
					$new_price_found = 1;
				}

				$total_price = $price + $option_price;

				$unit_price = $this->tax->calculate($total_price, $product_info['tax_class_id'], $this->config->get('config_tax'));
				$total = $this->currency->format($unit_price * $this->request->post['quantity'], $this->session->data['currency']);

				$unit_tax = $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
				$tax_total = $this->currency->format(((float)$product_info['special'] ? ($product_info['special'] + $option_price) : ($product_info['price'] + $option_price)) * $this->request->post['quantity'], $this->session->data['currency']);

				$json['total_price'] = $total;
				$json['new_price_found'] = $new_price_found;
				$json['tax_price'] = $tax_total;
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
			}
			
	public function getRecurringDescription() {
		$this->load->language('product/product');
		$this->load->model('catalog/product');

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		if (isset($this->request->post['recurring_id'])) {
			$recurring_id = $this->request->post['recurring_id'];
		} else {
			$recurring_id = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = $this->request->post['quantity'];
		} else {
			$quantity = 1;
		}

		$product_info = $this->model_catalog_product->getProduct($product_id);
		
		$recurring_info = $this->model_catalog_product->getProfile($product_id, $recurring_id);

		$json = array();

		if ($product_info && $recurring_info) {
			if (!$json) {
				$frequencies = array(
					'day'        => $this->language->get('text_day'),
					'week'       => $this->language->get('text_week'),
					'semi_month' => $this->language->get('text_semi_month'),
					'month'      => $this->language->get('text_month'),
					'year'       => $this->language->get('text_year'),
				);

				if ($recurring_info['trial_status'] == 1) {
					$price = $this->currency->format($this->tax->calculate($recurring_info['trial_price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$trial_text = sprintf($this->language->get('text_trial_description'), $price, $recurring_info['trial_cycle'], $frequencies[$recurring_info['trial_frequency']], $recurring_info['trial_duration']) . ' ';
				} else {
					$trial_text = '';
				}

				$price = $this->currency->format($this->tax->calculate($recurring_info['price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

				if ($recurring_info['duration']) {
					$text = $trial_text . sprintf($this->language->get('text_payment_description'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				} else {
					$text = $trial_text . sprintf($this->language->get('text_payment_cancel'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				}

				$json['success'] = $text;
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
