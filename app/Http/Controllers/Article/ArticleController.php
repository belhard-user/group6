<?php

namespace App\Http\Controllers\Article;

class ArticleController extends \App\Http\Controllers\Controller
{
    public function main($id, $notid)
    {
        return $id . ' - ' . $notid;
    }
    public function main2($id, $notid)
    {
        return $id . ' - ' . $notid;
    }
}