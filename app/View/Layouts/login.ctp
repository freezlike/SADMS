<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php echo $this->Html->charset('utf8'); ?>
        <title>
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('bootstrap-theme.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
    </head>
    <!-- HTML code from Bootply.com editor -->
    <body>
        <!--login modal-->
        <?php echo $this->fetch('content'); ?>
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        <?php echo $this->Html->script('jquery.min'); ?>
        <?php echo $this->Html->script('scripts'); ?>
        <?php //echo $this->Html->script('select2/jquery-1.10.2.min'); ?>
        <?php echo $this->Html->script('bootstrap.min'); ?>
        <?php echo $this->fetch('script'); ?>
        <?php //echo $this->element('sql_dump'); ?>
    </body>
</html>