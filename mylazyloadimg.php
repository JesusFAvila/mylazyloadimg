<?php
// Check if PrestaShop version is defined to prevent direct access
if (!defined('_PS_VERSION_')) {
    exit;
}

class MyLazyLoadImg extends Module {
    
    public function __construct() {
        $this->name = 'mylazyloadimg';
        $this->tab = 'front_office_features';
        $this->version = '1.2.0';
        $this->author = 'Jesús Fernández Ávila';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('LazyLoad Images');
        $this->description = $this->l('Add loading="lazy" to all JPG images automatically.');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install() {
        return parent::install();
    }

    public function uninstall() {
        return parent::uninstall();
    }

    public function hookDisplayImage($params) {
        // Get the image tag
        $imgTag = $params['img_tag'];

        // Add loading="lazy" attribute to the image tag
        $lazyImgTag = str_replace('<img ', '<img loading="lazy" ', $imgTag);

        return $lazyImgTag;
    }
}
