<?php echo $this->Html->css('jquery.dataTables',array('inline'=>false)); ?>
<div class="row">
    <div class="col-md-6">
        <div class="page-header">
            <h3><?php echo __("Liste des Saisons"); ?></h3>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo __('Nom'); ?></th>
                    <th><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($saisons as $saison): ?>
                    <tr>
                        <td><?php echo $saison['Saison']['id']; ?></td>
                        <td><?php echo $saison['Saison']['name']; ?></td>
                        <td>
                            <a href="<?php echo $this->Html->url(array('controller' => 'saisons', 'action' => 'edit',$saison['Saison']['id'])); ?>">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="">
                                <i class="glyphicon glyphicon-remove"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <div class="page-header">
            <h3><?php echo __("Actions"); ?></h3>
        </div>
        <ul class="nav">
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'saisons', 'action' => 'add')); ?>">
                    <?php echo __("Ajout Saison"); ?>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php echo $this->Html->script('jquery.dataTables.min',array('inline'=>false)); ?>
<?php echo $this->Html->script('datatables',array('inline'=>false)); ?>