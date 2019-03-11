<?php

use App\Models\Article;

require __DIR__ . '/autoload.php';

$articles = Article::findNLast(3);

include __DIR__ . '/App/templates/index.php';