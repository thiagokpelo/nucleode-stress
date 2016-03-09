<?php

$path = (isset($_GET['url'])) ? $_GET['url'] : 'home';

$ROUTE = 'home';
$BASE = '/n-cleo-de-stress';

if (strpos($path, 'quem-somos') !== false) {
    $ROUTE = 'quem-somos';
}

if (strpos($path, 'terapias/cognitivo-comportamental') !== false) {
    $ROUTE = 'cognitivo-comportamental';
}

if (strpos($path, 'terapias/life-coaching') !== false) {
    $ROUTE = 'life-coaching';
}

if (strpos($path, 'terapias/estresse-e-resiliencia') !== false) {
    $ROUTE = 'estresse-e-resiliencia';
}

if (strpos($path, 'terapias/neuropsicologia') !== false) {
    $ROUTE = 'neuropsicologia';
}

if (strpos($path, 'terapias/avaliacoes') !== false) {
    $ROUTE = 'avaliacoes';
}

if (strpos($path, 'terapias/biofeedback') !== false) {
    $ROUTE = 'biofeedback';
}

if (strpos($path, 'terapias/tabagismo') !== false) {
    $ROUTE = 'tabagismo';
}

if (strpos($path, 'contato') !== false) {
    $ROUTE = 'contato';
}

$file = "includes/pages/$ROUTE.php";

// <title>

$title = null;


switch ($ROUTE) {
    case 'home':
        $title = 'Núcleo De-Stress';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='homepage fullsize'";
        break;
    case 'quem-somos':
        $title = 'Núcleo De-Stress | Quem Somos';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='homepage fullsize'";
        break;
    case 'cognitivo-comportamental':
        $title = 'Núcleo De-Stress | Cognitivo Comportamental';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='homepage fullsize'";
        break;
    case 'life-coaching':
        $title = 'Núcleo De-Stress | Life Coaching';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='homepage fullsize'";
        break;
    case 'estresse-e-resiliencia':
        $title = 'Núcleo De-Stress | Estresse e Resiliência';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='homepage fullsize'";
        break;
    case 'avaliacoes':
        $title = 'Núcleo De-Stress | Avaliações';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='homepage fullsize'";
        break;
    case 'biofeedback':
        $title = 'Núcleo De-Stress | Biofeedback';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='homepage fullsize'";
        break;
    case 'tabagismo':
        $title = 'Núcleo De-Stress | Tabagismo';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='homepage fullsize'";
        break;
    case 'neuropsicologia':
        $title = 'Núcleo De-Stress | Neuropsicologia';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='homepage fullsize'";
        break;
    case 'contato':
        $title = 'Núcleo De-Stress | Contato';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, psicologia, tabagismo, estresse, nucleo, doutora regina";
        $body_class = "class='contact-page contact-page-wide-map'";
        break;
    default:
        $title = 'Núcleo De-Stress';
        $description = "Núcleo de-stress é uma clínica de psicologia que tem como objetivo promover o bem estar, satisfação para todas as áreas da vida e manejar sentimentos ruins.";
        $keywords = "stress, biofeedback, estresse, nucleo, doutora regina";
        $body_class = "class=''";
        break;
}


if(file_exists($file)){

    include('includes/layout/header.php');
    include($file);
    include('includes/layout/footer.php');

}else{
    echo "Desculpe... Esta página não existe!";
}