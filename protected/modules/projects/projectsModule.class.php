<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class projectsModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {

        if (isset($this->arguments[1]))
        {
            return $this->errorPage;
        }

        if (isset($this->arguments[0]))
        {
            return $this->itemMethod($this->arguments[0]);
        }

        return $this->listMethod();
    }

    public function listMethod()
    {
        # Пагинация
        #
        //$pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.projects.list';

        # Получение списка
        #
        if (!($projects = $this->compiled($cache)))
        {
            $projects = Q("SELECT * FROM `#_mdd_projects` WHERE `visible`=1 ORDER BY `ord` ASC")->all();

            if (!empty($projects)){
                $dif = new \Files();
                foreach ($projects as $key => $value) {
                    $projects[$key]['image_file'] = $dif->getFilesByGroup($value['img'], array('original', 'sm'), array('id', 'title', 'file'), true);

                }
            }
           // $this->cache->setCache($cache, $team);
            // exit(__($projects));
        }

        # Мета теги
        #
        $meta = $this->metaData($projects);

        return [
            'meta'              =>  $meta,
            //'pager'             =>  $pager,
            'projects'         =>  $projects,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.projects.item.'.$system;

        if (!($projects = $this->compiled($cache)))
        {
            $projects = Q("SELECT * FROM `#_mdd_projects` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            // $employee = Q("SELECT * FROM `#_mdd_team` WHERE `visible`=1")->all();
            if (!empty($projects)){
                $dif = new \Files();
               
                    $projects['image_file'] = $dif->getFilesByGroup($projects['img'], array('original', 'sm'), array('id', 'title', 'file'), true); 
                    $projects['image_back'] = $dif->getFilesByGroup($projects['background'], array('original'), array('id', 'title', 'file'), true); 
               
            }
            // exit(__($projects));
            //$this->cache->setCache($cache, $team);
        }

        # Мета теги
        #
        // $meta = $this->metaData($team);

        # Хлебные крошки
        #
       // $this->addBreadCrumbs($team, [ 'id', 'id', 'name', 'system' ]);

        return [
            //'meta'              =>  $meta,
            //'page'              =>  [ 'name' => '' ],
            'projects'     =>  $projects,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
            // 'employee'          => $employee
        ];
    }

    public function blockMethod()
    {
        return [
            'template' => 'block'
        ];
    }
}