<?php
$this->extend("/Layout/TwitterBootstrap/dashboard");
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessageBord $messageBord
 */
?>
<div class="container-fluid bg-light">
<?php $this->append("tb_sidebar") ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <div class="list-group">
        <?= $this->Html->link(__('ステータス追加'), ["controller" => "MessageStatuses", 'action' => 'add'], ["class" => "list-group-item list-group-item-action list-group-item-info"]) ?>
        <?= $this->Html->link(__('戻る'), ["controller" => "MessageBords", 'action' => 'index'], ["class" => "list-group-item list-group-item-action list-group-item-info"]) ?>
        <?= $this->Html->link(__('TOPへ'), ['controller' => 'Dairy', 'action' => 'index'], ["class" => "list-group-item list-group-item-action list-group-item-info"]) ?>
    </div>
  <p>必要に応じて左のACTIONSからステータスを追加できる</p>
  <p>選択肢の作成</p>
  <ul>
    <li>選択肢の数を入力（上限６）</li>
    <li>選択肢作成を押す</li>
    <li>選択肢の数を訂正する場合はやり直しを押す</li>
  </ul>
  <p>ユーザは選択しなくても作成できるようになっているが選択しなくては無意味</p>
</nav>
<?php $this->end(); ?>

<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
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
            echo "<div class='row border'>";
            echo "<div id='privateUser' class='col-md-6'>";
            echo str_replace(";", " ", $this->Form->control("private", ["label" => "閲覧可能ユーザ", "multiple" => "checkbox", "name" => "alluser", "options" => $allUser]));
            echo str_replace(";", " ", $this->Form->control("private", ["label" => false, "multiple" => "checkbox", "options" => $users]));
            echo "</div>";
            echo "<div class='col-md-6'>";
            echo "<label>宛先ユーザ</label>";
            echo "<div id='group'>";
            echo "<label><input id='allUser' type='checkbox'>全選択</label>";
            echo "<label><input id='soukatu' type='checkbox'>総括</label>";
            echo "<label><input id='kintai' type='checkbox'>キンタイ</label>";
            echo "<label><input id='sistem' type='checkbox'>シスカン</label>";
            echo "<label><input id='kenkyo' type='checkbox'>kenkyo</label>";
            echo "</div>";
            echo "<div id='destinationUser'>";
            echo "<div id='soukatuUser'>";
            echo str_replace(";", " ", $this->Form->control("user", ["label" => false, "class" => "soukatu", "multiple" => "checkbox", "options" => $soukatu]));
            echo "</div>";
            echo "<div id='kenkyoUser'>";
            echo str_replace(";", " ", $this->Form->control("user", ["label" => false, "class" => "kenkyo", "multiple" => "checkbox", "options" => $kenkyo]));
            echo "</div>";
            echo "<div id='sistemUser'>";
            echo str_replace(";", " ", $this->Form->control("user", ["label" => false, "class" => "sistem", "multiple" => "checkbox", "options" => $sistem]));
            echo "</div>";
            echo "<div id='kintaiUser'>";
            echo str_replace(";", " ", $this->Form->control("user", ["label" => false, "class" => "kintai", "multiple" => "checkbox", "options" => $kintai]));
            echo "</div></div>";
            //echo str_replace(";", " ", $this->Form->control("user", ["label" => "宛先ユーザ", "multiple" => "checkbox", "options" => $users]));
            echo "</div></div>";
            //filesへの入力
            echo $this->Form->file("file[]", ["multiple" => "true", "secure" => false]);
        ?>
    </fieldset>
    <!--<div class="text-right mt-2"><?= $this->Form->button(__('Submit')) ?></div>-->
    <div class="text-right mt-2"><?= $this->Form->button('送信', ["class" => "btn-info"]) ?></div>
    <?= $this->Form->end() ?>
</div>
<div class="col-md-2">
</div>
</div>
