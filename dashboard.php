<?php
if(isset($_GET['uname'])&&isset($_GET['page'])){
    $uname=$_GET['uname'];
    $page=$_GET['page'];
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="dashboard.css">
        <title>Calculate loan EMI and CIBIL count</title>
    </head>
    <body onload="loadPage()">
        <div class="firstDiv">
            <div id="sidenav" class="dashboardContainer">
                <div id="profile">
                    <div id="profileImg"></div>
                    <h1 id="userId"><?php echo $uname;?></h1>
                </div>
                <button name="dashboard" class="navbtn" onclick="getNewPage(this)">Dashboard</button>
                <button class="navbtn" name="loanEmi" onclick="getNewPage(this)">Loan EMI</button>
                <button class="navbtn" name="cibilCount" onclick="getNewPage(this)">CIBIL count</button>
                <button class="navbtn" name="about" onclick="getNewPage(this)">About</button>
                <button class="navbtn" name="writeUs" onclick="getNewPage(this)">Write To Us</button>
                <button class="navbtn" onclick="window.location.href='login.html'">Log Out</button>
            </div>
            <div id="mainContent" class="dashboardContainer">

            </div>
        </div>
        <script>
            function getNewPage(t){
                let btn=t.name;
                let page = '<?php echo $page; ?>';
                if(btn!=page){
                    document.getElementById('activeTab').removeAttribute('id');
                    let target="dashboard.php?uname="+<?php echo $uname; ?>+"&page="+btn;
                    window.location.href=target;
                }
            }
            function loadPage(){
                let page= '<?php echo $page; ?>';
                let btns=document.getElementsByClassName('navbtn');
                for(i=0;i<btns.length;i++){
                    if(btns[i].name==page){
                        btns[i].setAttribute('id','activeTab');
                    }
                }
            }
        </script>
    </body>
</html>
<?php
}else{
    $uname="page not found: Please contact to the service provider;";
    echo $uname;
}
?>

 