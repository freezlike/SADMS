<div class="row">
    <div class="col-md-6">
        <div class="page-header">
            <h3><?php echo __("Edition Saison"); ?></h3>  
        </div>
        <?php
        echo $this->Form->create('Saison', array(
            'inputDefaults' => array('label' => false, 'div' => false),
            'class' => 'form-horizontal'
        ));
        ?>
        <?php echo $this->Form->input('id', array()); ?>
        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo __("Nom"); ?></label>
            <div class="col-sm-10">
                <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">                
                <?php echo $this->Form->submit(__('Envoyer'), array('class' => 'btn btn-success')); ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="page-header">
            <h3><?php echo __("Actions"); ?></h3>  
        </div>
        <ul class="nav">
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'saisons', 'action' => 'index')); ?>">
                    <?php echo __("Liste Saisons"); ?>
                </a>
            </li>
        </ul>
    </div>
</div>