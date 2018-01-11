
<div class="error" align='center' ><?=$info;?></div>

<div id="reg-form" align="center">
    <form action="index.php?view=forgot" method="post">
        <label for="username"><?=lang('login');?></label><br />
        <input type="text" name="username" value="" /><br /><br />
        <label>Е-mail</label><br />
        <input type="text" name="email" value="" /><br />
        <input type="submit" name="send" value="<?=lang('send');?>" class="reg-btn" />
    </form>
</div>  