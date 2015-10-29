<?php echo $this->Html->css('select2/select2', array('inline' => false)); ?>
<?php echo $this->Html->css('select2/select2-bootstrap', array('inline' => false)); ?>
<div class="row">
    <div class="col-md-6">
        <div class="page-header">
            <h3><?php echo __('Veuillez spécifiez vos symptômes'); ?></h3>
        </div>
        <form>
            <div class="input-group">
                <?php echo $this->Form->select('symptome_id', $symptomes, array('class' => 'form-control', 'empty' => __("Choisir les Symptômes..."))); ?>
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="addSymptome">+</button>
                </span>
            </div><!-- /input-group -->
        </form>
        <br clear="both"/>
        <div>
            <ul class="nav" id="listSymptome"></ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="page-header">
            <h3><?php echo __('Résultat'); ?></h3>
        </div>
        <button class="btn btn-info" id="runSimulation"><?php echo __("Lancer la simulation"); ?></button>
        <div id="result">

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="page-header">
            <h4><?php echo __("Aide ?"); ?></h4>
        </div>
        <?php echo __("Pour spécifier les symptômes pour la déduction de la maladie de la saison courante, vous avez un bouton après la liste déroulante pour cumuler les symptômes observés avant résultat et une croix (x) pour enlever en cas d'erreur."); ?>
    </div>
    <div class="col-md-6">
        <div class="page-header">
            <h4><?php echo __("N.B"); ?></h4>
        </div>
        <ul class="nav">
            <li><?php echo __("Les résultats trouvés sur cette application sont purement expérimentaux."); ?></li> 
            <li><?php echo __("Plus vous êtes précis sur vos symptômes plus la déduction sera précise"); ?></li> 
        </ul>
    </div>
</div>
<?php echo $this->Html->script('select2/select2', array('inline' => false)); ?>
<?php echo $this->Html->script('app', array('inline' => false)); ?>