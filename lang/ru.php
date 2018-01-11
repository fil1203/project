<?
function lang($str)
{
    $lang = array(
         'main' => 'Главная',
         'news' => 'Новости',
         'video' => 'Видео',    
         'gallary' => 'Галлерея',
         'read' => 'Читать', 
         'read_more' => 'Читать далее',
         'see' => 'Смотреть', 
         'singup' => 'Регистрация', 
         'forgot' => 'Забыли пароль', 
         'enter' => 'Войти',
         'name' => 'Ваше имя :',
         'text' => 'Текст :',
         'send' => 'Отправить',
         'leave a comment' => 'Оставить комментарий :',
         'comments' => 'Коменнтарии :',
         'published' => 'Опубликовано :',
         'login' =>'Логин',
         'password' => 'Пароль',
         'simbols' => "Символы с картинки",
         'register' => 'Регистрация',
         'password2' => 'Повторите пароль'
    );

    $str = $lang [$str];
    
    if(in_array($str,$lang)) return $str; 
    else return false;
 }   
?>
