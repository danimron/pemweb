<!DOCTYPE html>
<html>
<head>
	<title>
		VRD MUSIC
	</title>
</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="..\css\bootstrap.css">
    <link rel="stylesheet" href="..\css\myStyle.css">
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.4.1/css/all.css'>
<body class="bg">
    <div class="container-fluid header">
        <div class="row">
            <div class="col-md-4">
                <h1 class="judul">
                    VRD MUSIC
                </h1>
            </div>
            <div class="col-md-3 col-md-offset-5">
                <table>
                    <tr>
                        <td>
                            <div class="search-box">
                                <input class="search-txt" name="" placeholder="Search">
                                <button class="btn-search" type="submit" onclick="alert('Test')">
                                    <i class="fa fa-search"> </i>
                                </button>
                                 <a class="search-btn" href="#"> 
                            </div>
                        </td>
                        <td>
                            <a href="loginpage.php">
                                <button class="btn-login" style='font-size:32px' type="submit" formaction="loginpage.php">
                                    <i class="fas fa-user-circle"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div> 
        
        <div class="navibar row">
            <div class="col-md-3 col-xs-12">
                <li><a href="homepage.php">Beranda</a></li>
            </div>
            <div class="col-md-3 col-xs-12">
                <li><a href="news.asp">Rilisan Baru</a></li>
            </div>
            <div class="col-md-3 col-xs-12">   
                <li><a href="contact.asp">Rekomendasi</a></li>
            </div>
            <div class="col-md-3 col-xs-12">
                <li><a href="about.asp">Top 10</a></li>
            </div>
                  
        </div>
        
    </div>
    <div class="container">
        <div class="row form-login">
            <div class="col-md-3 col-md-offset-4">
                <form action="homepage.php">
                    <input type="text" name="uname" class="uname" placeholder="Username"><br>
                    <input type="password" name="password" class="password" placeholder="Password"><br>
                    <input type="submit" name="login" class="login" value="Login" onclick="alert('Test')">
                </form>
                <input type="submit" name="register" class="register" value="Register" onclick="alert('Test')" >
            </div>
        </div>
    </div>

    
	<!-- <script src="script.js"></script>	 -->
</body>
</html>