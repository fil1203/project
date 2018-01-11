<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="style/css_admin.css" />
<link rel="stylesheet" type="text/css" href="style/ui-lightness/jquery-ui-1.9.2.custom.css" />
    <link rel="stylesheet" href="style/ui-lightness/jquery.ui.all.css">
    <link rel="stylesheet" href="style/ui-lightness/demos.css">
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css" /><![endif]-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/admin/jquery-ui-1.8.2.custom.min.js"></script>
<script type="text/javascript" src="js/admin/jQuery.tree.js"></script>
<script type="text/javascript" src="js/admin/cufon-yui.js"></script>
    <script src="js/admin/jquery.ui.core.js"></script>
	<script src="js/admin/jquery.ui.widget.js"></script>
	<script src="js/admin/jquery.ui.datepicker.js"></script>
 
<script type="text/javascript" src="js/admin/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/admin/custom.js"></script> 
<script type="text/javascript" src="js/admin/scriptbreaker-multiple-accordion-1.js"></script> 
<script type="text/javascript" src="ckeditor/ckeditor.js"></script> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Админ-панель</title>
<script type="text/javascript" language="JavaScript">

$(document).ready(function() {
	$(".topnav").accordion({
		accordion:false,
		speed: 300,
		closedSign: '[+]',
		openedSign: '[-]'
	});
});

</script>
</head>
<body>

<div id="header"><!-- Start of Header --> 

	<div id="notice-bar">
    <ul>  <!--  Start of Tab Controls -->
		<li><a href="#"> Привет, <?=$_SESSION['username'];?> :</a></li> 
		<li><a href="index.php?view=exit_cab">Выйти</a></li> 
	</ul> <!--  End of Tab Controls -->
    </div>
    <div>
        <form method="post" action="" class="lang-form">
            <input type="hidden" name="lang" value="ru" />
            <input type="image" name="change_lang" value=" " src="images/admin/ru.png" class="lang_img"  />
        </form> 

        <form method="post" action="" class="lang-form" >
            <input type="hidden" name="lang" value="en" />
            <input type="image"name="change_lang"  value=" " src="images/admin/en.png" class="lang_img" />
        </form>
    </div>
    <!-- Notice bar at the right side  -->     
</div><!-- End of Header  -->

<div class="container" id="top-panel"><!--  Start of container -->

    <div class=" left-col"><!-- Start of Left Column --> 
	   <a href="index.php" target="_blank"><img src="images/admin/logo.jpg" alt="" /></a>
	</div>
    

	<div id="dock"><!--  Start of Dock -->    
        <a href="admin.php" class="menu-item"><img src="images/icons/main.png" alt='dock-icon'/></a>
        <a href="admin.php?view=news&t=add" class="menu-item"><img src="images/icons/page.png" alt='dock-icon'/></a>
        <a href="admin.php?view=video&t=add" class="menu-item"><img src="images/icons/video.png" alt='dock-icon'/></a>
        <a href="admin.php?view=photos&t=add" class="menu-item"><img src="images/icons/photo.png" alt='dock-icon'/></a>
        <a href="admin.php?view=users" class="menu-item"><img src="images/icons/users.png" alt='dock-icon'/></a>       
    </div><!--  End  of Dock -->
    
	<a href="#" id="dock-control"></a><!--  Button for Sliding Head Panel --->

</div><!--  End of Head Panel container -->

<div class="container"><!--  Start of container -->

	<div class="left-col"><!--  Start of Left Column -->

      <div class="ae-widget-sidebar  minimizable"><!--  Start of Widget Box -->
      <h4 class="ae-widget-header">Меню</h4><!--  Widget  header -->
      <div class="ae-widget-content"><!--  Start of Widget Content -->
      
      <ul class="topnav">
    <li><a href="#">Новости</a>
     <ul>
      <li><a href="admin.php?view=news">Все новости</a></li>
      <li><a href="admin.php?view=news&t=add">Добавить</a></li>
     </ul>
    </li>
    <li><a href="#">Видео</a>
     <ul>
      <li><a href="admin.php?view=video">Все видео</a></li>
      <li><a href="admin.php?view=video&t=add">Добавить</a></li>
     </ul>
    </li>
    <li><a href="#">Галерея</a>
     <ul>
      <li><a href="admin.php?view=photos">Все фото</a></li>
      <li><a href="admin.php?view=photos&t=add">Добавить</a></li>
     </ul>
    </li>
    <li><a href="#">Комментарии</a>
     <ul>
      <li><a href="admin.php?view=comments">Все комменатрии</a></li>
     </ul>
    </li>
   </ul>
      
      
      </div><!--  End of Widget Content -->
      
    </div><!--  End of Widget Box -->

	<div class="ae-widget-sidebar closable"><!--  Start of Widget Box -->
      <h4 class="ae-widget-header">Виджет</h4>
      <div class="ae-widget-content">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus. Curabitur et lacus ligula. Sed euismod lacinia magna tincidunt semper. Morbi accumsan, lacus ut euismod lacinia, orci arcu ultricies diam, vel blandit magna diam sed lectus. Vivamus egestas commodo imperdiet. Nullam tempor risus vel nisi auctor aliquam. Phasellus quis nunc at ante posuere auctor non semper nisl. 
      </p>
      </div>

	</div><!--  End of Widget Box -->


</div><!--  End of Left Column -->

<div id="main-panel"><!--  Start of Main Panel -->

<div id="tab" class="ae-widget"> <!--  Start of Tab Widget -->

	<ul class="ae-widget-header">  <!--  Start of Tab Controls -->
		<li><a href="#"></a></li> 
	</ul> <!--  End of Tab Controls -->
    

    
    
    <div class="tabs" class="ae-widget-content">

	<div id="tab1" > <!--  Start of Tab 1 -->
    
    <div class="ae-widget">
      
      
      <? include($_SERVER['DOCUMENT_ROOT']. '/views/pages/admin/'.$view.'.php'); ?>
    </div>

	</div>  <!--  End of Tab 1 -->

    </div>
</div>
</div>

<div class="right-col"><!--  Start of Right Column -->

    <div class="ae-widget-sidebar"><!--  Start of Widget Box -->
        <h4 class="ae-widget-header">Recent Activities</h4>
        <div class="ae-widget-content">
        
        <ul>
      <li class="expandable">Invoice Recieved <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus.
      </p></li>
      <li class="expandable">Article Published <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus.
      </p></li>
      <li class="expandable">Invoice Sent <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus.
      </p></li>
      <li>Not Expandable</li>
      <li>Image Galery Loaded</li>
      </ul>
        
        
        </div>
    </div>
    
    <!--  End of Widget Box -->
</div>

</div><!--  End of container -->
</body>
</html>