<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessageBord $messageBord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('ステータス追加'), ["controller" => "MessageStatuses", 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('戻る'), ["controller" => "MessageBords", 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('TOPへ'), ['controller' => 'Dairy', 'action' => 'index']) ?></li>
    </ul>
  <p>必要に応じて左のACTIONSからステータスを追加できる</p>
  <p>選択肢の作成</p>
  <ul>
    <li>選択肢の数を入力（上限６）</li>
    <li>選択肢作成を押す</li>
    <li>選択肢の数を訂正する場合はやり直しを押す</li>
  </ul>
  <p>ユーザは選択しなくても作成できるようになっているが選択しなくては無意味</p>
</nav>

<div class="messageBords form large-9 medium-8 columns content">
    <?= $this->Form->create($messageBord, ["type" => "file"]); ?>
    <fieldset>
        <legend><?= __('メッセージボード作成') ?></legend>
        <?php
            echo $this->Form->control('title', ["label" => "タイトル"]);
            echo str_replace(";", " ", $this->Form->control('users_id', ["label" => "作成者", "type" => "select", "options" => $users]));
            echo $this->Form->control('message_statuses_id', ["label" => "ステータス", 'options' => $messageStatuses]);
            echo $this->Form->control('choice', ["label" => "選択肢の数", "max" => 6, "min" => 0]);
            echo "<input id='reload' type='button' value='選択肢作成' />";
            echo "<input id='reset' type='button' value='やり直し' />";
            echo "<div class='choiceContent'>";
            echo "<label id='contentLabel' for='content'>選択肢</label>";
            echo "<input class='contentInput' name='content[0]' type='text' />";
            echo "</div>";
            echo $this->Form->control('message', ["label" => "メッセージ"]);
            echo $this->Form->control('period', ["label" => "期限"]);
            echo str_replace(";", " ", $this->Form->control("user", ["label" => "ユーザ", "multiple" => "checkbox", "options" => $users]));
            //filesへの入力
            echo $this->Form->file("file[]", ["multiple" => "true", "secure" => false]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
