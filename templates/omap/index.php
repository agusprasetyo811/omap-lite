<?php if(!$v=='box'||!$v=='out'){?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{TITLE_SITE}</title>
<link href="{STYLE_URL}style/style.css" rel="stylesheet" type="text/css" />
<link href="{STYLE_URL}style/topmenu/style.css" rel="stylesheet" type="text/css" />
<link href="{JQUERY_URL}date/css/tanggal.css" rel="stylesheet" type="text/css" />
<link href="{MODULE_URL}mod_slider/style/style.css" rel="stylesheet" type="text/css" />
<link href="{JQUERY_URL}date/css/ui-lightness/jquery.ui.all.css" rel="stylesheet" type="text/css" />
<link href="{JQUERY_URL}fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" media="screen" />
<script language="javascript" src="{JQUERY_URL}'jquery-1.7.1.js"></script>
<script src="{JQUERY_URL}ui/jquery-ui-min.js" language="javascript"></script>
<script language="javascript" src="{JQUERY_URL}date/js/jquery.ui.core.js"></script>
<script language="javascript" src="{JQUERY_URL}date/js/jquery.ui.datapicter.js"></script>
<script language="javascript" src="{JQUERY_URL}fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script language="javascript" src="{JQUERY_URL}fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body class="bg_all">
<div id="layout" class="all">
    <div id="search">
    </div>
    <div id="body">
    	<div id="header"><div align="center" valign="middle"> == HEADER == </div></div>
        <!-- Top Menus -->
        <div id="menus"></div>
        <!-- Content -->
        <div id="content">
            <table border="0">
            	<tr valign="top">
                	<td>
                    	<div id="content-left"> 
                    		<div align="center">== SIDE LEFT ==</div>
                        </div>
                    </td>
                    <td>
                    	<div id="content-center">
                    		{BODY_CENTER}
                        </div>
                    </td>
                    <td>
                    	<div id="content-right">
                    		<div align="center">== SIDE RIGHT ==</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Footer -->
        <div id="footer">{AUTHOR_SITE}</div>
    </div>
</div>
<br /><br />
</body>
</html>
<?php }else{?>{BODY_CENTER}<?php }?>
