<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
$templateParser->assign('myTitle',$title);
$templateParser->display('head.tpl');

// header
$templateParser->display('header.tpl');
// menu
$templateParser->display('menu.tpl');

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {

    case 'home':
        $templateParser->display('home.tpl');
        break;
    case 'articles':
        require_once 'model/getarticles.php';
        $templateParser->assign('result_list',$result_list);
        $templateParser->display('articles.tpl');

        //rewrite to smarty template
        break;
    case 'about':
        require_once 'model/getabout.php';
        $templateParser->assign('about_list',$result_list);
        $templateParser->display('music.tpl');
        break;
    case 'contact':
        //contact
        $templateParser->display('contact.tpl');
        break;

        //Albums Oliver
    case 'oliveralbums' :
        $templateParser->display('oliveralbums.tpl');
        break;

    case 'chlorine' :
        $templateParser->display('chlorine.tpl');
        break;

    case 'essentials' :
        $templateParser->display('essentials.tpl');
        break;

    case 'polosocks' :
        $templateParser->display('polosocks.tpl');
        break;

    case 'suicideboys' :
        $templateParser->display('suicideboysalbum.tpl');
        break;

    case 'suicidesongs' :
        $templateParser->display('suicidesongs.tpl');
        break;
}


// footer
$templateParser->assign('myFoot',$footer);
$templateParser->display('footer.tpl');

?>