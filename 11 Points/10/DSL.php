<?php

class PageBuilder {
    public function header($title) {
        return "<html>\n<head>\n<title>$title</title>\n</head>\n<body>\n";
    }

    public function content($content) {
        return "<p>$content</p>\n";
    }

    public function footer() {
        return "</body>\n</html>\n";
    }

    public function build($title, $content) {
        $page = $this->header($title);
        $page .= $this->content($content);
        $page .= $this->footer();
        return $page;
    }
}

$builder = new PageBuilder();
$page = $builder->build("My Page", "Welcome to my page!");
echo $page;

