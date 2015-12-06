<?php
use yii\bootstrap\Nav;
use kartik\sidenav\SideNav;
use mdm\admin\components\MenuHelper;
// use yii\bootstrap\Nav;
?>



<div id="cp-bckend-link">
        <?php

        $items = MenuHelper::getAssignedMenu(Yii::$app->user->id);

// print_r(MenuHelper::getAssignedMenu(Yii::$app->user->id));


        echo SideNav::widget([
            'type' => SideNav::TYPE_PRIMARY,
            'heading' => 'Main Menu',
            'id'=>'lf',
            'items' => $items
]);

/*
    echo SideNav::widget([
    'type' => SideNav::TYPE_PRIMARY,
    'heading' => 'Main Menu',
    'items' => [
        ['label' => 'Home','icon' => 'home','url' => ['/site/index']],
        ['label' => 'Diagnosa', 'icon' => 'question-sign', 'url' => ['/diagnosa/diagnosa-tht']],                    
        [
            'label' => 'Data Diagnosa',
            'icon' => 'question-sign',
            'items' => [
                ['label' => 'Master Diagnosa', 'url' => ['/diagnosa']],                    
                ['label' => 'Master Penyakit',  'url' => ['/penyakit']],                    
                ['label' => 'Master Gejala Penyakit', 'url' => ['/gejala-penyakit']],                                    
                ['label' => 'Master Jenis Penyakit',  'url' => ['/jenis-penyakit']],                    
            ],
        ],
        [
            'label' => 'Artikel',
            'icon' => 'question-sign',
            'items' => [
                ['label' => 'Artikel', 'icon'=>'info-sign', 'url' => ['/artikel']],                    
                ['label' => 'Kategori Artikel', 'icon'=>'phone', 'url' => ['/artikel-kategori']],                                        
                ['label' => 'Info App', 'icon'=>'info-sign', 'url' => ['/info']],   
            ],
        ],
        [
            'label' => 'User Informasi',
            'icon' => 'question-sign',
            'items' => [
                ['label' => 'Master User',  'url' => ['/user']],   
                ['label' => 'Master Profil User',  'url' => ['/profil-user']],              
                ['label' => 'Master Agama', 'url' => ['/agama']],   
                
            ],
        ],
        [
            'label' => 'RBAC Akses',
            'icon' => 'question-sign',
            'items' => [
                ['label' => 'Assignments',  'url' => ['/admin']],   
                ['label' => 'Roles', 'url' => ['/admin/role']],                    
                ['label' => 'Permissions', 'url' => ['/admin/permission']],                    
                ['label' => 'Routes',  'url' => ['/admin/route']],                    
                ['label' => 'Rules',  'url' => ['/admin/rule']],                    
                ['label' => 'Menu',   'url' => ['/admin/menu']], 
            ],
        ],        
        [
            'label' => 'Help',
            'icon' => 'question-sign',
            'items' => [
                ['label' => 'About', 'icon'=>'info-sign', 'url'=>'#'],
                ['label' => 'Contact', 'icon'=>'phone', 'url'=>'#'],
            ],
        ],
    ],
]); */
    
    ?>
</div>
       