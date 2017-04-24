<?php

return array(
    
     'news/([0-9]+)' => 'news/view/$1', // actionView в NewsController
 
    
    'gallery' => 'gallery/index', // actionIndex в GalleryController
    'feedback' => 'feedback/index', // actionIndex в FeedbackController
    'news' => 'news/index', // actionIndex в NewsController

    '' => 'site/index', // actionIndex в SiteController
    
);
