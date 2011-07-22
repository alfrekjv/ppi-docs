<?php
class APP_Controller_Blog extends APP_Controller_Application {
	
	/**
	 * View all blog posts
	 * @return void
	 */
	function index() {
		$oBlog = new APP_Model_Blog();
		$posts = $oBlog->getPosts("published = 1");
		$oTag  = new APP_Helper_TagCloud();
		$oTag->setQuery('SELECT count(*) as `count` FROM ppi_blog_tag GROUP BY `title` ORDER BY `count` DESC');
		$tags  = $oTag->getTagCloud();
		$this->load('blog/index', compact('posts', 'tags'));
	}
	
	/**
	 * View an individual blog post
	 * @return void
	 */
	function view() {
		$sPermalink = $this->get(__FUNCTION__, '');
		if($sPermalink == '') {
			throw new PPI_Exception('Invalid Permalink');
		}
		$oBlog = new APP_Model_Blog();
		$post = $oBlog->getPostByPermalink($sPermalink);
		if(empty($post)) {
			throw new PPI_Exception('Unable to obtain post information.');
		}
		$this->load('blog/view', compact('post'));
	}
	
}