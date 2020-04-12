<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!--
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    -->
    <?= $this->Html->css('jquery-ui.css') ?>
    <?= $this->Html->script('jquery-3.4.1.js') ?>
    <?= $this->Html->script('jquery-ui.js') ?>
    <?= $this->Html->script('datepicker-ja.js') ?>
    <?= $this->Html->script('pullDown') ?>
    <?= $this->Html->scriptStart() ?>
        $(function() {
            $(".datepicker").datepicker();
        });
    <?= $this->Html->scriptEnd() ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav>
        <div>
            <ul>
<?php //if($this->request->session()->check("Auth.User.username")): ?>
<?php if($this->getRequest()->getSession()->check("Auth.User.username")): ?>
                <li><?= $this->Html->link(__('LOGOUT'), ["controller" => "Users", 'action' => 'logout']) ?></li>
<?php endif ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <p>ログインID: <?= $this->getRequest()->getSession()->read("Auth.User.username") ?></p>
    </footer>
</body>
</html>
