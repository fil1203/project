<?
function lang($str)
{
    $lang = array(
         'main' => 'Main',
         'news' => 'News',
         'video' => 'Videos',    
         'gallary' => 'Gallary',
         'read' => 'Read',
         'read_more' => 'Read more', 
         'see' => 'See',
         'singup' => 'Sing Up', 
         'forgot' => 'Forgot password', 
         'enter' => 'Enter',
         'name' => 'Name :',
         'text' => 'Text :',
         'send' => 'Send',
         'leave a comment' => 'Leave a comment :',
         'comments' => 'Comments :',
         'published' => 'Published :',
         'login' =>'Login',
         'password' => 'Password',
         'simbols' => "Simbols",
         'register' => 'Register',
         'password2' => 'Repit password '
    );

    $str = $lang [$str];
    
    if(in_array($str,$lang)) return $str; else return false;
 }   
?>
