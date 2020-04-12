<?php 
    //$this->extend("/Layout/TwitterBootstrap/dashboard");
    //$this->extend("/Layout/TwitterBootstrap/cover");
    $this->extend("/Layout/TwitterBootstrap/signin");
    $this->assign("title", "ログイン"); 
?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <?= $this->Flash->render() ?>
        <div class="text-center">
            <h3><?= __('ログイン') ?></h3>
            <p>ユーザID ： nagano</p>
            <p>パスワード ： 123456</p>
        </div>
        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('ユーザIDとパスワードを入力してください') ?></legend>
            <?php
                echo $this->Form->control('username', ["label" => "ユーザID"]);
                echo $this->Form->control('password', ["label" => "パスワード"]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
    <div class="col-md-3">
    </div>
</div>
    
