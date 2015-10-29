<?php echo $this->Html->css('jquery.dataTables',array('inline'=>false)); ?>
<div class="row">
    <div class="col-md-8">
        <div class="page-header">
            <h3><?php echo __("Liste des Symptômes"); ?></h3>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><?php echo __("#"); ?></th>
                    <th><?php echo __("Nom"); ?></th>
                    <th><?php echo __("Actions"); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($symptomes as $symptome): ?>
                <tr>
                    <td><?php echo $symptome['Symptome']['id']; ?></td>
                    <td><?php echo $symptome['Symptome']['name']; ?></td>
                    <td>
                        <a href="<?php echo $this->Html->url(array('controller' => 'symptomes', 'action' => 'edit',$symptome['Symptome']['id'])); ?>">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <div class="page-header">
            <h3><?php echo __("Actions"); ?></h3>
        </div>
        <ul class="nav">
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'symptomes', 'action' => 'add')); ?>">
                    <?php echo __("Ajout Symptômes"); ?>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php echo $this->Html->script('jquery.dataTables.min',array('inline'=>false)); ?>
<?php echo $this->Html->script('datatables',array('inline'=>false)); ?>