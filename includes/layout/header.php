<!DOCTYPE html>
<!--[if lt IE 9]> <html class="lt-ie9" lang="pt-br"> <![endif]-->
<!--[if !IE] -->
<html lang='pt-br'>
  <!-- <![endif] -->
  <head>
    <title><?php echo $GLOBALS['title']; ?></title>

    <!-- METAS TAGS -->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' >
    <meta charset="utf-8">
    <meta name='keywords' content="<?php echo $GLOBALS['keywords']; ?>">
    <meta name='description' content="<?php echo $GLOBALS['description']; ?>">
    <meta name="robots" content='index,follow'>
    <meta name='subject' content='Internet'>
    <meta name='copyright' content='Núcelo De-Stress'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <link rel="author" type="text/plain" href="<?php echo $BASE ?>humans.txt">
    
    <!--[if IE]> <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->
    <link href='<?php echo $BASE;?>/assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='<?php echo $BASE;?>/assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <!-- / required stylesheets -->
    <link href="<?php echo $BASE;?>/assets/stylesheets/bootstrap/bootstrap.min.css" media="all" id="bootstrap" rel="stylesheet" type="text/css" />
    <link href="<?php echo $BASE;?>/assets/stylesheets/jednotka_green.css" media="all" id="colors" rel="stylesheet" type="text/css" />
    <link href="<?php echo $BASE;?>/assets/stylesheets/styles.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="<?php echo $BASE;?>/assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="<?php echo $BASE;?>/assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body <?php echo $GLOBALS['body_class'];?>>
    <div id='wrapper'>

      <header id='header'>
              <div class='container'>
                <nav class='navbar navbar-collapsed-sm navbar-default' id='nav' role='navigation'>
                  <div class='navbar-header'>
                    <button class='navbar-toggle' data-target='.navbar-header-collapse' data-toggle='collapse' type='button'>
                      <span class='sr-only'>Toggle navigation</span>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand' href='<?php echo $BASE;?>'>
                      <img alt="Núcleo De-Stress" width="180" src="<?php echo $BASE;?>/assets/images/logo.png" />
                    </a>
                  </div>
                  <div class='collapse navbar-collapse navbar-header-collapse'>
                    <ul class='nav navbar-nav navbar-right'>
                      <li <?php if (strpos($path, 'home') !== false) { echo "class='active'"; }?>>
                        <a href='<?php echo $BASE;?>'>
                          <span>
                            Home
                          </span>
                        </a>
                      </li>
                      <li <?php if (strpos($path, 'quem-somos') !== false) { echo "class='active'"; }?>>
                        <a href='<?php echo $BASE;?>/quem-somos'>
                          <span>
                            Quem somos
                          </span>
                        </a>
                      </li>
                      <li class='dropdown <?php if ((strpos($path, 'cognitivo-comportamental') !== false) || (strpos($path, 'life-coaching') !== false) || (strpos($path, 'estresse-e-resiliencia') !== false) || (strpos($path, 'avaliacoes') !== false) || (strpos($path, 'biofeedback') !== false) || (strpos($path, 'tabagismo') !== false) || (strpos($path, 'neuropsicologia') !== false)) { echo "active"; } ?>'>
                        <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown' href='#'>
                          <span>
                            Terapias
                            <i class='fa fa-angle-down'></i>
                          </span>
                        </a>
                        <ul class='dropdown-menu' role='menu'>
                          <li class=''>
                            <a href='<?php echo $BASE;?>/terapias/cognitivo-comportamental'>Cognitivo comportamental</a>
                          </li>
                          <li class=''>
                            <a href='<?php echo $BASE;?>/terapias/life-coaching'>Life coaching</a>
                          </li>
                          <li class=''>
                            <a href='<?php echo $BASE;?>/terapias/estresse-e-resiliencia'>Estresse e resiliência</a>
                          </li>
                          <li class=''>
                            <a href='<?php echo $BASE;?>/terapias/avaliacoes'>Avaliações</a>
                          </li>
                          <li class=''>
                            <a href='<?php echo $BASE;?>/terapias/neuropsicologia'>Neuropsicologia</a>
                          </li>
                          <li class=''>
                            <a href='<?php echo $BASE;?>/terapias/biofeedback'>Biofeedback</a>
                          </li>
                          <li class=''>
                            <a href='<?php echo $BASE;?>/terapias/tabagismo'>Tabagismo</a>
                          </li>
                        </ul>
                      </li>
                      <li <?php if (strpos($path, 'contato') !== false) { echo "class='active'"; }?>>
                        <a href='<?php echo $BASE;?>/contato'>
                          <span>
                            Contato
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </header>