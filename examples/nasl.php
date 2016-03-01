<?php
abstract class Article {
    public $title;
    public $text;
   static  protected $delim = ': ';
    abstract public function view();
}

class NewsArticle extends Article {
public $author;
    public function view() {
        echo $this->author . self::$delim . $this->title;
    }
}

$a = new NewsArticle();
$a->title = 'Example of news';
$a->author = "Johnson";
$a->view();