<html>
	<head>
	
        <title>Mapleton View - Site Manager</title>
        
        <!-- include CSS -->
        <link rel="stylesheet" href="css/admin.css" />
        
		<!-- include jquery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	</head>
	<body>
		<div class='container'>
            <div class='sidebar'>
                <div class='top'>
                    <a class='header'><strong>Site Manager</strong></a>
                    <a href='#' class='item'>Website</a>
                    <a href='#' class='item selected'>Dashboard</a>
                    <a href='#' class='item'>Pages</a>
                    <a href='#' class='item'>Settings</a>
                    <a href='#' class='item'>Change Password</a>
                    <a href='#' class='item'>Logout</a>
                </div>
                <!--<div class='bottom'>
                    <a href='#' class='item'>Website</a>
                    <a href='#' class='item'>Logout</a>
                </div>-->
            </div>
            <div class='page'>
                [:: MODULE=admin PAGE={$page} ::]
            </div>
        </div>
	</body>
</html>