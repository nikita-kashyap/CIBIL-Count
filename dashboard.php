<?php
if(isset($_GET['uname'])){
    $uname=$_GET['uname'];
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="dashboard.css">
    </head>
    <body>
        <div class="firstDiv">
            <div id="sidenav" class="dashboardContainer">
                <div id="profile">
                    <div id="profileImg"></div>
                    <h1 id="userId"><?php echo $uname;?></h1>
                </div>
                <button id="activeTab" class="navbtn" onclick="getNewPage(this)">Dashboard</button>
                <button class="navbtn" onclick="getNewPage(this)">Loan EMI</button>
                <button class="navbtn" onclick="getNewPage(this)">CIBIL count</button>
                <button class="navbtn" onclick="getNewPage(this)">About</button>
                <button class="navbtn" onclick="getNewPage(this)">Write To Us</button>
                <button class="navbtn" onclick="window.location.href='login.html'">Log Out</button>
            </div>
            <div id="mainContent" class="dashboardContainer">

            </div>
        </div>
        <script>
            function getNewPage(t){
                let txt=t.innerHTML;
                alert(txt);
            }
        </script>
    </body>
</html>
<?php
}else{
    $uname="sorry username is invalid: page not found;";
}
?>

 