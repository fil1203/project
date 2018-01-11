   
        <table cellpadding="0" cellspacing="0" border="0" class="block" style="margin-right: 30px;">
            <tr>
                <td valign="top">
                    <div class="block-title"><?=lang('news');?></div>
                    <div class="block-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах</div>
                    <div class="block-read" align="center"><a href="index.php?view=news"><?=lang('read');?> &raquo;</a></div>
                </td>
            </tr>
        </table>
        
        <table cellpadding="0" cellspacing="0" border="0" class="block" style="margin-right: 30px;">
            <tr>
                <td valign="top">
                    <div class="block-title"><?=lang('video');?></div>
                    <div class="block-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах</div>
                    <div class="block-read" align="center"><a href="index.php?view=video"><?=lang('see');?> &raquo;</a></div>
                </td>
            </tr>
        </table>
        
        <table cellpadding="0" cellspacing="0" border="0" class="block">
            <tr>
                <td valign="top">
                    <div class="block-title"><?=lang('gallary');?></div>
                    <div class="block-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах</div>
                    <div class="block-read" align="center"><a href="index.php?view=photos"><?=lang('read');?> &raquo;</a></div>
                </td>
            </tr>
        </table>
        
        <div class="clear"></div>

            <table align="center" width="939" cellpadding="0" cellspacing="0" border="0">
                <tr>
                	<td valign="top">
                    
                        <table width="620" cellpadding="0" cellspacing="0" border="0" class="last-news">
                            <tr>
                                <td colspan="2">
                                   <div class="last-news-title"><?=$LAST_NEWS['title']?></div> 
                                </td>
                            </tr>
                            <tr>
                                <td width="300">
                                    <img src="userfiles/news/<?=$last_news['img'];?>" alt="" width="300" /> 
                                </td>
                                <td valign="top">
                                    <div class="last-news-text">
                                        <p><?=str_size($last_news['text']).'...'?></p>
                                    </div>
                                    <div><a href="index.php?view=news&t=<?=$last_news['title_url'];?>"><?=lang('read_more');?> &raquo;</a></div>
                                </td>
                            </tr>
                        </table>
                        
                    </td>
                </tr>
            </table>   
  