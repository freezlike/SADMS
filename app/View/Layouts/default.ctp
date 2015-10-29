<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset('utf8'); ?>
        <title>
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon', $this->Html->url('/favicon.png'));

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('bootstrap-theme.min');
        echo $this->Html->css('simply-toast.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
    </head>
    <body>
        <?php echo $this->element('navbar'); ?>
        <div class="container">
            <?php echo $this->Flash->render(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
        <?php echo $this->Html->script('jquery.min'); ?>
        <?php echo $this->Html->script('scripts'); ?>
        <?php //echo $this->Html->script('select2/jquery-1.10.2.min'); ?>
        <?php echo $this->Html->script('bootstrap.min'); ?>
        <?php echo $this->Html->script('simply-toast.min'); ?>
        <?php echo $this->fetch('script'); ?>
        <?php //echo $this->element('sql_dump'); ?>
    </body>
</html>
