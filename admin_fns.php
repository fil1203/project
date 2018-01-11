<?

    function insert_data($table,$row,$data)
    {
        $row = implode(',',$row);
        $data = implode (',',$data);
        db_connect();
        
        mysql_query( "INSERT INTO $table ($row) VALUES ($data)" );
    }


    function update_data($table,$id,$row,$data)
        {
            db_connect();
            $i=0;
            foreach($data as $item=>$key):
            mysql_query(" UPDATE $table SET $row[$i] =  '$key'  WHERE id ='$id'");
            $i++;
            endforeach;
        }
        
    function delete_data($table,$id)
        {
            db_connect();
            
            mysql_query("DELETE FROM $table WHERE id='$id'");
            
        }    


        function upload_img($table)
    {
        $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm", ".txt", ".js");
        $type = $_FILES['filename']['type'];
        $size = $_FILES['filename']['size'];
        
        foreach ($blacklist as $item)
        
        if(!preg_match("/$item\$/i", $_FILES['filename']['name']))
        {
            if (($type == "image/jpg") || ($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") && ($size < 1024*2*1024))
            {
                move_uploaded_file($_FILES["filename"]["tmp_name"], "userfiles/".$table."/".$_FILES["filename"]["name"]);
                $img = $_FILES["filename"]["name"];
                return $img;
            }
        }
        else return $img = 'nophoto.png';
        
    }

    function translit($str) 
    {
        $tr = array(
            "А"=>"a",
            "Б"=>"b",
            "В"=>"v",
            "Г"=>"g",
            "Д"=>"d",
            "Е"=>"e",
            "Ё"=>"e",
            "Ж"=>"j",
            "З"=>"z",
            "И"=>"i",
            "Й"=>"y",
            "К"=>"k",
            "Л"=>"l",
            "М"=>"m",
            "Н"=>"n",
            "О"=>"o",
            "П"=>"p",
            "Р"=>"r",
            "С"=>"s",
            "Т"=>"t",
            "У"=>"u",
            "Ф"=>"f",
            "Х"=>"h",
            "Ц"=>"ts",
            "Ч"=>"ch",
            "Ш"=>"sh",
            "Щ"=>"sch",
            "Ъ"=>"",
            "Ы"=>"i",
            "Ь"=>"j",
            "Э"=>"e",
            "Ю"=>"yu",
            "Я"=>"ya",
            "а"=>"a",
            "б"=>"b",
            "в"=>"v",
            "г"=>"g",
            "д"=>"d",
            "е"=>"e",
            "ё"=>"e",
            "ж"=>"j",
            "з"=>"z",
            "и"=>"i",
            "й"=>"y",
            "к"=>"k",
            "л"=>"l",
            "м"=>"m",
            "н"=>"n",
            "о"=>"o",
            "п"=>"p",
            "р"=>"r",
            "с"=>"s",
            "т"=>"t",
            "у"=>"u",
            "ф"=>"f",
            "х"=>"h",
            "ц"=>"ts",
            "ч"=>"ch",
            "ш"=>"sh",
            "щ"=>"sch",
            "ъ"=>"y",
            "ы"=>"i",
            "ь"=>"j",
            "э"=>"e",
            "ю"=>"yu",
            "я"=>"ya", 
            " "=> "_",
            "."=> "",
            "/"=> "_",
            ","=>"_",
            "-"=>"_",
            "("=>"",
            ")"=>"",
            "["=>"",
            "]"=>"",
            "="=>"_",
            "+"=>"_",
            "*"=>"",
            "?"=>"",
            "\""=>"",
            "'"=>"",
            "&"=>"",
            "%"=>"",
            "#"=>"",
            "@"=>"",
            "!"=>"",
            ";"=>"",
            "№"=>"",
            "^"=>"",
            ":"=>"",
            "~"=>"",
            "\\"=>""
        );
        return strtr($str,$tr);
    }







?>