<?
///������� ��� ����������� ���� ������
function db_connect ()
    {
    $host = "localhost";
    $user = "root";
    $pswd = "";
    $db = "mega";
    
    $connection = mysql_connect($host, $user, $pswd);
    
    if(!$connection || !mysql_select_db($db,$connection))
    {
        return false;
               
    }
    return $connection;
    }    


///������� ��� ��������� ����������� ������� � ������
    function db_result_to_array($result)
        {
            $res_array = array();
            
            $count =0;
                       
        while ($row = mysql_fetch_array($result))
            {
                $res_array[$count] = $row;
                
                $count++;
                      
            }
            return $res_array;
           

        }


///������� ��� ������� ����
    function get_menu($lang)
        {
            db_connect();
            
            $query = sprintf("SELECT * FROM pages WHERE pages.lang = '%s' AND pages.title_url != 'signup' AND pages.title_url != 'forgot'" ,
                     mysql_real_escape_string($lang));
            
            $result = mysql_query($query);
            
            $result = db_result_to_array($result);
                    
            return $result;
                       
        }


/// ������� ��� ��������� ���������� � ��������
    function page_data ($title,$lang)
        {
            db_connect();
            
            $query = sprintf("SELECT * FROM pages WHERE pages.title_url = '%s' AND pages.lang = '%s' " ,
                            mysql_real_escape_string($title),
                            mysql_real_escape_string($lang));
                            
            $result = mysql_query($query);
            
            $row = mysql_fetch_array($result);
            
            return $row;
            
        }
    
    
    ///������� ��� ������� ��������, ����� � ���� ��� �����
    function select_data($table,$lang)
        {
            db_connect();
            
            $query = sprintf( "SELECT * FROM $table WHERE lang='%s' ORDER BY $table.id DESC",
                            mysql_real_escape_string($lang));
            
            $result = mysql_query($query);
            
            $result = db_result_to_array($result);
                    
            return $result;
                       
        }    
    

    
    ///������� ��� ��������� ���������� � ����� ��� �������
    function get_data($table,$title,$lang)
        {
            db_connect();
            
            $query = sprintf("SELECT * FROM $table WHERE $table.title_url = '%s' AND $table.lang = '%s'",
                            mysql_real_escape_string($title),
                            mysql_real_escape_string($lang));
                            
            $result = mysql_query($query);
            
            $row = mysql_fetch_array($result);
            
            return $row;
            
        }
    
     
    ///������� ��� ��������� ���������� � �����, �������, ������������ ��� �������
    function get_data_admin($table,$id)
        {
            db_connect();
            
            $query = sprintf("SELECT * FROM $table WHERE $table.id = '%s' ",
                            mysql_real_escape_string($id));
                            
            $result = mysql_query($query);
            
            $row = mysql_fetch_array($result);
            
            return $row;
            
        }
    
    
    ///������� ��� ������� �������� � ������
    function str_size($str)
    {
        
        $str = iconv('utf-8','windows-1251', $str);
        $str = substr($str,0,100) ;
        $str = iconv('windows-1251','utf-8',$str );
         
        return $str;
        
    }
    
    
    ///������� ��� ��������� ��������� ������� �� �������
    function get_last_news($lang)
    {
        db_connect();
            
            $query = sprintf("SELECT * FROM news WHERE lang ='$lang' ORDER BY news.id DESC LIMIT 1");
                            
            $result = mysql_query($query);
            
            $row = mysql_fetch_array($result);
            
            return $row;
    }
    
    
    ///������� ���  ���������� ������������ ��� ������� ��� �����
    function get_comments($title,$section,$lang)
    {
        db_connect();
            
            $query = sprintf("SELECT * FROM comments WHERE comments.note_id ='%s' AND comments.section='%s' AND comments.lang = '%s' ORDER BY comments.id DESC",
                              mysql_real_escape_string($title),
                              mysql_real_escape_string($section),
                              mysql_real_escape_string($lang));
            
            $result = mysql_query($query);
            
            $result = db_result_to_array($result);
                    
            return $result;
          
        
    }
    
    
    ///������� ���������� ������������
    function add_comment($data)
    {
        db_connect();
        mysql_query (" INSERT INTO  comments (author,text,note_id,section,date,time,lang) VALUES($data)");
    }
    
    ///������� ��� �����
    function captcha()
    {
        $captcha = rand(10000,99999);
        return $captcha;
    }
    ///������� ��� �������� 
    function clear_data($data)
    {
        $data = trim(htmlspecialchars($data));
        return $data;
    }


///������� ��� ������� ������
    function  change_lang ($lang)
    {
        $_SESSION ['lang'] = $lang;
        return $_SESSION ['lang'];        
            
    }    
    
    
    ///������� ��� ��������, ���������� �� ����� ������ ��� �����
    function check_data ($table,$title,$lang) 
    {
        db_connect();
        
        $query = sprintf("SELECT *FROM $table WHERE $table.lang = '%s' AND $table.title_url = '%s'",
                        mysql_real_escape_string($lang),
                        mysql_real_escape_string($title));
            
            $result = mysql_query($query);
            if(mysql_num_rows($result)> 0) return TRUE;
                else return FALSE;
                
    }
    ///������� ��� �������������� ������
    function forgot($user,$email)
    {
        db_connect();
        
        $query = sprintf("SELECT *FROM users WHERE users.username = '%s' AND users.email = '%s'",
                        mysql_real_escape_string($user),
                        mysql_real_escape_string($email));
            
            $result = mysql_query($query);
            if(mysql_num_rows($result)> 0) return TRUE;
                else return FALSE;
    }
    
    
    ///������� ��� ��������� ������ � ���� ������
    function change_pswd($pswd,$user)
    {
        db_connect();
        
        mysql_query("UPDATE users SET password='$pswd' WHERE users.username = '$user' ");
        
    }
    
    
    ///������� �������� ���������� ������� ��� �����
    function views($table,$title)
    {
        db_connect();
        
        $query = sprintf(" SELECT views FROM $table WHERE $table.title_url = '%s'",
                         mysql_real_escape_string($title));
                         
        $result = mysql_query($query);
        
        $row = mysql_fetch_array($result);
        
        $views = $row['views']+1;
        
        mysql_query(" UPDATE $table SET views='$views' WHERE $table.title_url = '$title'");                 
        
    }
    
    ///������� ��� ��������� ������ ������������� � �������
  function get_users()
  {
    db_connect();
            
            $query = "SELECT * FROM users  ";
            
            $result = mysql_query($query);
            
            $result = db_result_to_array($result);
             
                    
            return $result;
  }
  
  ///������� ��� ��������� ��������� ������� � �������
  function get_main_news()
  {
    db_connect();
            
            $query = "SELECT * FROM news  ORDER BY news.id DESC LIMIT 5";
            
            $result = mysql_query($query);
            
            $result = db_result_to_array($result);
                    
            return $result;
  }
?>