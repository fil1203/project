<div class="error" align='center' ><?=$info;?></div>
<div id="reg-form" align="center">
    <form action="index.php?view=signup" method="post" class="reg-form">
        <label for="username"><?=lang('login');?></label><br />
        <input type="text" name="username" value="" /><br /><br />
        <label></label>E-mail<br />
        <input type="text" name="email" value="" /><br /><br />
        <label><?=lang('password');?></label><br />
        <input type="password" name="pswd" value="" /><br /><br />
        <label><?=lang('password2');?></label><br />
        <input type="password" name="pswd2" value="" /><br />
        <label><?=lang('simbols');?></label><br />
        <input type="text" readonly="readonly" name="captcha" value="<?=captcha();?>" size="4" class="captcha" />
        <input type="text" name="captcha2" size="5" maxlength="5" /><br />
        <input type="submit" name="register" value="<?=lang('register');?>" class="reg-btn" />
    </form>
</div>