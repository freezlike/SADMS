<?php $this->layout = 'login'; ?>
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center"><?php echo __('Identification'); ?></h1>
                <div id="loader">
                    <?php echo $this->Flash->render(); ?>
                </div>
            </div>
            <div class="modal-body" style="height: 200px;">
                <?php
                echo $this->Form->create('User', array(
                    'inputDefaults' => array('label' => false, 'div' => false),
                    'class' => 'form col-md-12 center-block'
                ));
                ?>
                <div class="form-group">
                    <?php echo $this->Form->input('username', array('placeholder' => __("Nom d'utilisateur"), 'class' => 'form-control input-lg')); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('password', array('placeholder' => __("Mot de passe"), 'class' => 'form-control input-lg')); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->submit(__('Se Connecter'), array('id' => 'submitLogin', 'div' => false, 'class' => 'btn btn-primary btn-lg btn-block')); ?>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
            <div class="modal-footer">
                <p class="text-center"><?php echo __("Bienvenue sur l'application veuillez vous identifiez, merci."); ?></p>	
            </div>
        </div>
    </div>
</div>
<?php echo $this->Html->script('login', array('inline' => false)); ?>