<h3>Bulletin board</h3>
<ul>

<div style="border-style: solid ; border-width: 1px; padding: 10px 5px 10px 20px; border-color: black;">
<?php
echo $this->Form->create('Board');//Fromのセッションヘルパーを使う
?>

<table>
<tr>
<td>タイトル</td>
<td><?php
echo $this->Form->input('title', array('required' => false,
		'label'=> false));?></td>
</tr>
<tr>
<td>名前</td>
<td>
<?php
echo $this->Form->input('name', array('required' => false,
		'label'=> false));?></td>
</tr>
<tr>
<td>本文</td>
<td>
<div style="display:inline-flex">
<?php
echo $this->Form->input('message', array('rows'=>3,'required' => false,
		'label'=> false));
?>
<?php
echo $this->Form->end('Save Post'); ?></div>
</td>
</tr>
</table>

</div>
</ul>

<br />

<ul>
<?php foreach  ($boards as $board) : ?>
<div style="border-style: solid ; border-width: 1px; padding: 10px 5px 10px 20px; border-color: black;">

<div style="padding: 10px 10px 10px 10px; border-color: black;">
<?php
echo h($board['Board']['title']);
?>
</div>

<hr/>

<div style="padding: 10px 10px 10px 10px; border-color: black;">
<?php
echo h($board['Board']['message']);
?>
</div>

<div style="width: 40%; padding: 10px 10px 10px 10px; float: left; word-wrap:break-word;">
<?php
echo h($board['Board']['name']);
?>
</div>

<div align="right" style="width: 40%; padding: 10px 10px 10px 10px; float: right; word-wrap:break-word;">
<?php
echo h($board['Board']['created']);
?>
</div>
<div style="clear:both;"></div>
</div>

<div style="padding: 10px 10px 10px 10px;"></div>

<?php endforeach; ?>

</ul>