<?php

class Setup {
    public function settings() {
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http"). "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->page = parse_url($url, PHP_URL_PATH);
        return [
            'slug' => $this->page
        ];
    }
}