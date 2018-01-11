<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td class="table_headlines">ID</td>
  <td class="table_headlines">Автор</td>
  <td class="table_headlines">Текст</td>
  <td class="table_headlines">Дата / Время</td>
  <td class="table_headlines2" width="60">Действие</td>
 </tr>

<?foreach($datas as $item):?>

<tr>
  <td class="articles_type"><?=$item['id'];?></td>
  <td class="articles_photo"><?=$item['author'];?></td>
  <td class="articles_topic"> <?=$item['text'];?></td>
  <td class="articles_comment"><?=$item['date'];?> / <?=$item['time'];?> </td>
  <td class="articles_actions"> <a href="admin.php?view=delete&t=comments&id=<?=$item['id'];?>" onclick="return confirmDel()"><img src="images/admin/delete.png" alt=""/></a></td>
 </tr>
 
 <?endforeach;?>
 
</table>