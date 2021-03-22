<?php
class ControllerExtensionFeedGoogleSitemap extends Controller {
	public function index() {
		if ($this->config->get('feed_google_sitemap_status')) {
			$output  = '<?xml version="1.0" encoding="UTF-8"?>';
			$output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';

			$this->load->model('catalog/product');
			$this->load->model('tool/image');

			if ($this->config->get('module_blog_status') == 1) {
				$this->load->model('extension/materialize/blog');

				$posts = $this->model_extension_materialize_blog->getPosts();

				foreach ($posts as $post) {
					if ($post['image']) {
						$output .= '<url>';
						$output .= '<loc>' . $this->url->link('extension/materialize/blog/post', 'post_id=' . $post['post_id']) . '</loc>';
						$output .= '<changefreq>weekly</changefreq>';
						$output .= '<lastmod>' . date('Y-m-d\TH:i:sP', strtotime($post['date_modified'])) . '</lastmod>';
						$output .= '<priority>1.0</priority>';
						$output .= '<image:image>';
						$output .= '<image:loc>' . $this->model_tool_image->resize($post['image'], 1000, 800, 'crop') . '</image:loc>';
						$output .= '<image:caption>' . $post['name'] . '</image:caption>';
						$output .= '<image:title>' . $post['name'] . '</image:title>';
						$output .= '</image:image>';
						$output .= '</url>';
					}
				}

				$authors = $this->model_extension_materialize_blog->getAuthors();

				foreach ($authors as $author) {
					$output .= '<url>';
					$output .= '<loc>' . $this->url->link('extension/materialize/blog/author/info', 'author_id=' . $author['author_id']) . '</loc>';
					$output .= '<changefreq>weekly</changefreq>';
					$output .= '<priority>0.7</priority>';
					$output .= '</url>';

					$posts = $this->model_extension_materialize_blog->getPosts(array('filter_author_id' => $author['author_id']));

					foreach ($posts as $post) {
						$output .= '<url>';
						$output .= '<loc>' . $this->url->link('extension/materialize/blog/post', 'author_id=' . $author['author_id'] . '&post_id=' . $post['post_id']) . '</loc>';
						$output .= '<changefreq>weekly</changefreq>';
						$output .= '<priority>1.0</priority>';
						$output .= '</url>';
					}
				}

				$output .= $this->getBlogCategories(0);
			}
			

			$products = $this->model_catalog_product->getProducts();

			foreach ($products as $product) {
				if ($product['image']) {
					$output .= '<url>';
					$output .= '  <loc>' . $this->url->link('product/product', 'product_id=' . $product['product_id']) . '</loc>';
					$output .= '  <changefreq>weekly</changefreq>';
					$output .= '  <lastmod>' . date('Y-m-d\TH:i:sP', strtotime($product['date_modified'])) . '</lastmod>';
					$output .= '  <priority>1.0</priority>';
					$output .= '  <image:image>';
					$output .= '  <image:loc>' . $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')) . '</image:loc>';
					$output .= '  <image:caption>' . $product['name'] . '</image:caption>';
					$output .= '  <image:title>' . $product['name'] . '</image:title>';
					$output .= '  </image:image>';
					$output .= '</url>';
				}
			}

			$this->load->model('catalog/category');

			$output .= $this->getCategories(0);

			$this->load->model('catalog/manufacturer');

			$manufacturers = $this->model_catalog_manufacturer->getManufacturers();

			foreach ($manufacturers as $manufacturer) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>0.7</priority>';
				$output .= '</url>';

				$products = $this->model_catalog_product->getProducts(array('filter_manufacturer_id' => $manufacturer['manufacturer_id']));

				foreach ($products as $product) {
					$output .= '<url>';
					$output .= '  <loc>' . $this->url->link('product/product', 'manufacturer_id=' . $manufacturer['manufacturer_id'] . '&product_id=' . $product['product_id']) . '</loc>';
					$output .= '  <changefreq>weekly</changefreq>';
					$output .= '  <priority>1.0</priority>';
					$output .= '</url>';
				}
			}

			$this->load->model('catalog/information');

			$informations = $this->model_catalog_information->getInformations();

			foreach ($informations as $information) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('information/information', 'information_id=' . $information['information_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>0.5</priority>';
				$output .= '</url>';
			}

			$output .= '</urlset>';

			$this->response->addHeader('Content-Type: application/xml');
			$this->response->setOutput($output);
		}
	}


			protected function getBlogCategories($parent_id, $current_path = '') {
				$output = '';

				$results = $this->model_extension_materialize_blog->getCategories($parent_id);

				foreach ($results as $result) {
					if (!$current_path) {
						$new_path = $result['blog_category_id'];
					} else {
						$new_path = $current_path . '_' . $result['blog_category_id'];
					}

					$output .= '<url>';
					$output .= '<loc>' . $this->url->link('extension/materialize/blog/category', 'blog_path=' . $new_path) . '</loc>';
					$output .= '<changefreq>weekly</changefreq>';
					$output .= '<priority>0.7</priority>';
					$output .= '</url>';

					$posts = $this->model_extension_materialize_blog->getPosts(array('filter_category_id' => $result['blog_category_id']));

					foreach ($posts as $post) {
						$output .= '<url>';
						$output .= '<loc>' . $this->url->link('extension/materialize/blog/post', 'blog_path=' . $new_path . '&post_id=' . $post['post_id']) . '</loc>';
						$output .= '<changefreq>weekly</changefreq>';
						$output .= '<priority>1.0</priority>';
						$output .= '</url>';
					}

					$output .= $this->getBlogCategories($result['blog_category_id'], $new_path);
				}

				return $output;
			}
			
	protected function getCategories($parent_id, $current_path = '') {
		$output = '';

		$results = $this->model_catalog_category->getCategories($parent_id);

		foreach ($results as $result) {
			if (!$current_path) {
				$new_path = $result['category_id'];
			} else {
				$new_path = $current_path . '_' . $result['category_id'];
			}

			$output .= '<url>';
			$output .= '  <loc>' . $this->url->link('product/category', 'path=' . $new_path) . '</loc>';
			$output .= '  <changefreq>weekly</changefreq>';
			$output .= '  <priority>0.7</priority>';
			$output .= '</url>';

			$products = $this->model_catalog_product->getProducts(array('filter_category_id' => $result['category_id']));

			foreach ($products as $product) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('product/product', 'path=' . $new_path . '&product_id=' . $product['product_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>1.0</priority>';
				$output .= '</url>';
			}

			$output .= $this->getCategories($result['category_id'], $new_path);
		}

		return $output;
	}
}
