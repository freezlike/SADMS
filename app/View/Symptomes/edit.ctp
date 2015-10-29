<div class="row">
    <div class="col-md-8">
        <div class="page-header">
            <h3><?php echo __("Edition Symptôme"); ?></h3>
        </div>
        <?php
        echo $this->Form->create('Symptome', array(
            'inputDefaults' => array('label' => false, 'div' => false),
            'class' => 'form-horizontal'
        ));
        ?>
        <?php echo $this->Form->input('id', array()); ?>
        <div class="form-group">
            <label class="control-label col-md-4"><?php echo __("Nom"); ?></label>
            <div class="col-md-8">
                <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => __("Nom du Symptôme"))); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $this->Form->submit(__('Envoyer'), array('div' => false, 'class' => 'btn btn-success col-md-offset-3')); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
    <div class="col-md-4">
        <div class="page-header">
            <h3><?php echo __("Actions"); ?></h3>
        </div>
        <ul class="nav">
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'symptomes', 'action' => 'add')); ?>">
                    <?php echo __("Ajout Symptôme"); ?>
                </a>
                <a href="<?php echo $this->Html->url(array('controller' => 'symptomes', 'action' => 'index')); ?>">
                    <?php echo __("Liste Symptômes"); ?>
                </a>
            </li>
        </ul>
    </div>
</div>