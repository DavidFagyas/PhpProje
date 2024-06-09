<?php
class WebPage {
    public function __construct() {
        $this->header();
        $this->body();
        $this->footer();
    }

    private function header() {
        include('header.php');
    }

    private function footer() {
        include('footer.php');
    }

    protected function body() {
        
    }
}
?>
