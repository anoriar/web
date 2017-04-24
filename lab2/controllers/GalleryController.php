<?php


class GalleryController
{

    public function actionIndex()
    {
        
        require_once(ROOT . '/views/gallery/index.php');
        return true;
    }

}
