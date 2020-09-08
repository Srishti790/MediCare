<link href ="sidebars\homesidebar.css" rel ="stylesheet">

<div class ="sidebar-btn-area">
    <div class="menu-line">
        <div class ="menu-line-1"></div>
        <div class ="menu-line-2"></div>
        <div class ="menu-line-3"></div>
    </div>
</div>

<div class ="sidebar_wrapper animated fadeInLeftBig hide">
        <div id="mylogo">
            <img src ="images\newlogo.png" alt="logo">
        </div>
        <div class ="drawer-links">
            <div class ="drawer-ul">
                <div class ="drawer-li"><a href ="index.php">Home</a></div>
                <div class ="drawer-li"><a href ="managerlogin.php">Manager</a></div>
                <div class ="drawer-li"><a href ="technicianlogin.php">Technicians</a></div>
                <div class ="drawer-li"><a href ="customerlogin.php">Cutomers</a></div>
                <div class ="drawer-li"><a href ="#contact">Contact Us</a></div>
            </div>
        </div>
</div>

<script src="js\jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.menu-line').click(function(){
            $('.sidebar_wrapper').toggleClass('hide')
        })
    })
</script>