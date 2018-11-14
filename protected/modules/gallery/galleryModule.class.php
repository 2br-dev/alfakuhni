<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class galleryModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {        
        return $this->blockMethod();
    }

    
    public function blockMethod()
    {
        $gallery = Q("SELECT * FROM `#_mdd_gallery` WHERE `visible`=1 ORDER BY `ord` ASC")->all();

            if (!empty($gallery)){
                $dif = new \Files();
                foreach ($gallery as $key => $value) {
                    $gallery[$key]['image_file'] = $dif->getFilesByGroup($value['img'], array('original', 'sm'), array('id', 'title', 'file'), true);

                }
        }

        // exit(__($gallery));

        return [
            'template' => 'block',
            'gallery' => $gallery
        ];
    }
}