<?php 
class Pages {
    public function __construct($setup){
        $this->settings = $setup->settings();
    }

    public function getPage(){ 
        $slug = $this->settings['slug'];
        switch ($slug) {
            case '/':
                $title = 'Home Page';
                $content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a scelerisque mi. Sed aliquam mi sit amet diam bibendum, id commodo odio placerat. Donec cursus mi non dapibus sodales. Fusce congue felis justo, eu tincidunt turpis feugiat id. In non nisl ultricies, faucibus metus nec, euismod lacus. Curabitur nec imperdiet arcu, porttitor sagittis eros. Sed ut rhoncus eros, id fermentum nunc. Etiam dapibus dolor eget neque bibendum porta. Donec id velit condimentum, volutpat enim id, commodo sapien.</p>';
                break;
            case '/about':
                $title = 'About Us';
                $content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a scelerisque mi. Sed aliquam mi sit amet diam bibendum, id commodo odio placerat. Donec cursus mi non dapibus sodales. Fusce congue felis justo, eu tincidunt turpis feugiat id. In non nisl ultricies, faucibus metus nec, euismod lacus. Curabitur nec imperdiet arcu, porttitor sagittis eros. Sed ut rhoncus eros, id fermentum nunc. Etiam dapibus dolor eget neque bibendum porta. Donec id velit condimentum, volutpat enim id, commodo sapien.</p>';
                break;
            case '/services':
                    $title = 'Services';
                    $content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a scelerisque mi. Sed aliquam mi sit amet diam bibendum, id commodo odio placerat. Donec cursus mi non dapibus sodales. Fusce congue felis justo, eu tincidunt turpis feugiat id. In non nisl ultricies, faucibus metus nec, euismod lacus. Curabitur nec imperdiet arcu, porttitor sagittis eros. Sed ut rhoncus eros, id fermentum nunc. Etiam dapibus dolor eget neque bibendum porta. Donec id velit condimentum, volutpat enim id, commodo sapien.</p>';
                    break;
            default:
                $title = 'Missing';
                $content = '<p>This page is missing</p>';
        }
        return [
            'title' =>$title,
            'content' => $content
        ];
    }
}