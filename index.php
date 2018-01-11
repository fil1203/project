<?

include ('db_fns.php');
include ('reg_fns.php');
session_start();
if (empty($_GET['view'])) $view = 'index';
else $view = $_GET['view'];

if($_SESSION['lang'] == '')
{
    $lang = 'ru';
    $_SESSION ['lang'] = $lang;
}    
    
else $lang = $_SESSION['lang'];

if(isset($_POST['change_lang'])) 
{
    change_lang($_POST['lang']);
    header ('location: index.php?view='.$view);
}
  
include ('lang/'.$lang.'.php');




$page_data = page_data($view,$lang);

switch ($view)
{
    case   'index':                  
        $last_news = get_last_news ($lang) ;  
    break;
    
    case  'news':
        $title = $_GET ['t'];
        if(!empty($title))
        {
            views($view,$title);
            $page_data = get_data ($view,$title,$lang);
            $comments = get_comments ($title,$view,$lang);
             if(isset($_POST ["send"]) && !empty($_POST['author']) && !empty($_POST['text']) && !empty($_POST['captcha2']) )
            {
                $captcha = $_POST ['captcha'];
                $captcha2 = $_POST ['captcha2'];
                if($captcha == $captcha2)
                 {
                $comment ['author'] = "'". $_POST['author']."'";
                $comment ['text'] = "'".$_POST ['text']."'";
                $comment ['note_id'] = "'".$_POST ['note_id']."'";
                $comment ['section'] = "'".$_POST ['section']."'";
                $comment ['date'] = "'".date('Y-m-d')."'";
                $comment ['time'] = "'".date('H:i:s')."'";
                $comment ['lang'] = "'".$lang."'";
                $comment =  implode(',',$comment);
                add_comment ($comment);
                 header ('location: index.php?view='.$view.'&t='.$title);
                 }
                   
               
                }
            if($captcha != $captcha2)
            {
                $info = 'цифры с картинки введены неверно';
            }
                
            if(isset($_POST ["send"]) && (empty($_POST['author']) || empty($_POST['text']) || empty($_POST['captcha2'])))
            {
                $info = 'Заполните все поля';
            }
            
        }
        else $page_data = page_data($view,$lang);
        $news = select_data($view,$lang);
    break;
    
    case  'video':
        $title = $_GET ['t'];
        if(!empty($title))
        {
            views($view,$title);
            $page_data = get_data ($view,$title,$lang);
            $comments = get_comments ($title,$view,$lang);
             if(isset($_POST ["send"]) && !empty($_POST['author']) && !empty($_POST['text']) && !empty($_POST['captcha2']) )
            {
                
                $captcha = $_POST ['captcha'];
                $captcha2 = $_POST ['captcha2'];
                if($captcha == $captcha2)
                 {
                $comment ['author'] = "'". $_POST['author']."'";
                $comment ['text'] = "'".$_POST ['text']."'";
                $comment ['note_id'] = "'".$_POST ['note_id']."'";
                $comment ['section'] = "'".$_POST ['section']."'";
                $comment ['date'] = "'".date('Y-m-d')."'";
                $comment ['time'] = "'".date('H:i:s')."'";
                $comment ['lang'] = "'".$lang."'";
                $comment =  implode(',',$comment);
                add_comment ($comment);
                header ('location: index.php?view='.$view.'&t='.$title);
                 }
                   
                
                }
                if($captcha != $captcha2)
                   {
                      $info = 'цифры с картинки введены неверно';
                   }
                
            if(isset($_POST ["send"]) && (empty($_POST['author']) || empty($_POST['text']) || empty($_POST['captcha2'])))
            {
                $info = 'Заполните все поля';
            }
            
        }
        else $page_data = page_data($view,$lang);
        $video = select_data($view,$lang);
    break;
    
    case  'photos':
        $photos = select_data($view,$lang);
        
    break;
    
    case  'signup':
        
        if(isset($_POST['register']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pswd']) && !empty($_POST['pswd2']) && !empty($_POST['captcha2']))
        
        {
           $login = clear_data ($_POST['username']);
           $email = clear_data ($_POST['email']);
           $pswd = clear_data ($_POST['pswd']);
           $pswd2 = clear_data ($_POST['pswd2']);
           $captcha = clear_data ($_POST['captcha']);
           $captcha2 = clear_data ($_POST['captcha2']);
        }   
      
        
           if($captcha != $captcha2)
            {
                $info = 'цифры с картинки введены неверно';
            }
           if ($pswd != $pswd2) $info = " Пароли не совпадают";
           if(!check_login($login)) $info = " Логин занят";
        
        
           if (($captcha == $captcha2) && ($pswd == $pswd2) && check_login($login))
            {
                $reg ['login'] = "'". clear_data($_POST['username'])."'";
                $reg ['pswd'] = "'".sha1(md5 (clear_data($_POST['pswd'])))."'";
                $reg ['email'] = "'". clear_data($_POST['email'])."'";
                $reg =implode(',',$reg);
                register ($reg);
                $_SESSION['username'] = $login;
                $_SESSION['status'] = '1';
                header ('Location: index.php');
            }
        
            
        if(isset($_POST ["send"]) && (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['pswd']) || empty($_POST['pswd2']) || empty($_POST['captcha2'])))
            {
                $info = 'Заполните все поля';
            }
        break;
   
   case 'login_cab':
        if(isset($_POST ["enter"]) && !empty($_POST['login']) && !empty($_POST['password']))
        {
                $login = clear_data($_POST['login']);
                $pswd1 = sha1(md5 (clear_data($_POST['password'])));
                if (check_user($login,$pswd1))
                {
                    $status = get_status($login);
                    $_SESSION['username'] = $login;
                    $_SESSION['status'] = $status['status'];
                    header('Location:index.php');
                }
                else header('Location:index.php');
        }
             
        break;
        
   case 'exit_cab':
                exit_cab();
                header('Location:index.php');
   
        break;
        
        
  case "forgot":
                
                if(isset($_POST ["send"]) && !empty($_POST['username']) && !empty($_POST['email']))
                {
                    $user = clear_data($_POST['username']);
                    $email = clear_data($_POST['email']);
                    if(forgot($user,$email))
                    {
                        $pswd = rand(10000,99999);
                        $to = $email;
                        $subject = "Восстановление пароля";
                        $msg = "Вот ваш новый пароль:".$pswd." Поменяйте сразу пароль!";
                        mail($to,$subject,$msg);
                        $pswd = sha1(md5 (clear_data($pswd)));
                        change_pswd($pswd,$user);
                        
                        $info = 'ok';
                    }
                    else
                    {
                        $info = 'Пользователя с таким логином не найдено';
                    }
                    
                    
                }
  
                
  
        break;
              
              
   case 'contacts':
   
            if(isset($_POST ["send"]) && !empty($_POST['text']) && !empty($_POST['email']) && !empty($_POST['captcha2']))
            {
                $captcha = $captcha = clear_data($_POST['captcha2']);
                $captcha2 = clear_data($_POST['captcha2']);
                if($captcha == $captcha2)
                {
                    $email =  clear_data($_POST['email']);
                    $text =  clear_data($_POST['text']);
                    
                    $to = "120387@ukr.net";
                    $subject = "Обратная связь";
                    $msg = "От:".$email."\n Текст сообщения:".$text;
                    mail($to,$subject,$msg);
                    $info = 'Сообщение отправлено!';
                }
                else $info = 'Символы введены неверно!';
                
                
            }
            if(isset($_POST ["send"]) && (empty($_POST['text']) || empty($_POST['email']) || empty($_POST['captcha2'])))
            {
                $info = 'Заполните все поля!';
            }
   
  
        break;           
 
}

$arr = array('index','news','video','photos','contacts','signup','forgot','login_cab','exit_cab');
if(!in_array ($view,$arr)) die ("EROR 404!");
include($_SERVER['DOCUMENT_ROOT'].'/views/layouts/site.php');

?> 