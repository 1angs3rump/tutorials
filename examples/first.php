<?php
class Article {
    public $title;
    public $text;
    public function __construct($title, $text=''){
        $this->title = $title;
        $this->text = $text;
    }

    public function view() {
        echo $this->title;
    }

}

$a = new Article('Article of news', 'Text of news');
$a-> view();

