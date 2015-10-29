<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')); ?>"><?php echo __('Système Maladies'); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id="accueil"><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')); ?>"><?php echo __('Accueil'); ?></a></li>
                <li id="saisons"><a href="<?php echo $this->Html->url(array('controller' => 'saisons', 'action' => 'index')); ?>"><?php echo __('Gestion Saisons'); ?></a></li>
                <li id="maladies"><a href="<?php echo $this->Html->url(array('controller' => 'maladies', 'action' => 'index')); ?>"><?php echo __('Gestion Maladies (B.C)'); ?></a></li>
                <li id="symptomes"><a href="<?php echo $this->Html->url(array('controller' => 'symptomes', 'action' => 'index')); ?>"><?php echo __('Gestion Symptomes (B.F)'); ?></a></li>
                <li id="bc_bf"><a href="<?php echo $this->Html->url(array('controller' => 'maladies', 'action' => 'bc_bf')); ?>"><?php echo __('Gestion B.C vs B.F'); ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Mon Compte'); ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>">LogOut</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>