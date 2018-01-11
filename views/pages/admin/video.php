<?if (isset($id) && $id != 'add'){?>
    <div class="add-title">Редактирование видео - "<?=$page_data['title'];?>" </div>
        <form action="admin.php?view=update&t=videoq&id=<?=$page_data['id'];?>" method="post" id="add-edit">
            <label for="title">Название</label><input type="text" name="title" value="<?=$page_data['title'];?>" size="60" /><br />
            <label>КОд</label><textarea name="code" cols="55" rows="11"><?=$page_data['code'];?></textarea><br />
            <label>Ключевые слова</label><textarea name="keywords" cols="44" rows="5"><?=$page_data['keywords'];?></textarea><br />
            <label>Описание</label><textarea name="description" cols="44" rows="5"><?=$page_data['description'];?></textarea><br />
            <label>Дата</label><input type="text" name="date" value="<?=$page_data['date'];?>" size="10" />
            <label>Время</label><input type="text" name="time" value="<?=$page_data['time'];?>" size="10" /><br />
            <input type="hidden" name="title_url" value="<?=$page_data['title_url'];?>"/>
            <input type="submit" name="save" value="Сохранить" class="button" onclick="alert('Данные успешно обновленны');" />
        </form>
<?}if($id == 'add'){?>
<div class="add-title">Добавление видео - "название" </div>
        <form action="admin.php?view=insert&t=video" method="post" id="add-edit">
            <label for="title">Название</label><input type="text" name="title" value="" size="60" /><br />
            <label>Код видео</label><textarea name="code" cols="55" rows="11"></textarea><br />
            <label>Ключевые слова</label><textarea name="keywords" cols="44" rows="5"></textarea><br />
            <label>Описание</label><textarea name="description" cols="44" rows="5"></textarea><br />
            <label>Дата</label><input type="text" name="date" value="" size="10" />
            <label>Время</label><input type="text" name="time" value="" size="10" /><br />
            <input type="hidden" name="lang" value="<?=$_SESSION['lang'];?>"/>
            <input type="submit" name="add" value="Добавить" class="button" onclick="alert('Данные успешно добавлены');" />
        </form>

<?}if(!isset ($id)){?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
              <td class="table_headlines">ID</td>
              <td class="table_headlines">Название</td>
              <td class="table_headlines">Ссылка</td>
              <td class="table_headlines2" width="60">Действие</td>
             </tr>
     
    <?foreach($datas as $item):?>
    
            <tr>
              <td class="articles_type"><?=$item['id'];?></td>
              <td class="articles_topic"><?=$item['title'];?></td>
              <td class="articles_comment"><a href="index.php?view=video&t=<?=$item['title_url'];?>" target="_blank">ссылка</a></td>
              <td class="articles_actions"><a href="admin.php?view=video&t=<?=$item['id'];?>"><img src="images/admin/edit.png" alt=""/></a> <a href="admin.php?view=delete&t=video&id=<?=$item['id'];?>" onclick="return confirmDel()"><img src="images/admin/delete.png" alt=""/></a></td>
             </tr>
             
     <?endforeach;?>
     
    </table>

<?}?>