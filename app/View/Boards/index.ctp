<h1>Bulletin board</h1>
<ul>
<div style="border-style: solid ; border-width: 1px; padding: 10px 5px 10px 20px; border-color: black;">

aaaaaa

</div>

</ul>

<div>
<br />
</div>

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
<br />
<?php endforeach; ?>

デバッグ

<?php foreach  ($boards as $board) : ?>
<?php
debug($board)
?>
<?php endforeach; ?>


</ul>