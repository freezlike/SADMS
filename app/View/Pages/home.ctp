<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
    <h1><?php echo __("Système d'aide à la décision des maladies de saisons"); ?></h1>
    <p><?php echo __("Cette application repose sur un système expert ayant pour but de simuler la déduction de maladies saisonnières, pour simuler le système de déduction veuillez appuyer sur le boutton ci-dessous"); ?></p>
    <p><?php echo __("Nous somme le ") . date("d-M-Y") . " " . $this->Season->currentSeasonName()['Saison']['desc']; ?></p>
    <p>
        <a class="btn btn-lg btn-primary" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'simulate', 'id' => $this->Season->currentSeasonName()['Saison']['id'])); ?>" role="button">
            <?php echo __("Lancer la simulation"); ?> &raquo;
        </a>
    </p>
</div>