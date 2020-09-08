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
                <div class ="drawer-li"><a href ="index.php"style ="margin-bottom:10px;">Home</a></div>
                <div class ="drawer-li">
                <div class ="dropdown-action view"style ="margin-bottom:10px;cursor:pointer">View</div>
                <div class ="dropdown-1 hide-dropdown">
                <div class ="drawer-li"><a href ="viewequipments.php">Equipments</a></div>
                <div class ="drawer-li"><a href ="viewtests.php">Tests</a></div>
                <div class ="drawer-li"><a href ="viewcustomers.php">Customer</a></div>
                <div class ="drawer-li"><a href ="viewtechnicians.php">technicians</a></div>
                <div class ="drawer-li"><a href ="totaltests.php">Total Tests</a></div>
                </div>
                </div>
                <div class ="drawer-li">
               <div class ="dropdown-action add" style ="margin-bottom:10px;cursor:pointer">Add</div>
               <div class ="dropdown-2 hide-dropdown">
                <div class ="drawer-li"><a href ="addequipments.php">Equipments</a></div>
                <div class ="drawer-li"><a href ="addtests.php">Tests</a></div>
                </div>
                </div>
                <div class ="drawer-li"><a href ="include/logout.inc.php">Logout</a></div>
            </div>
        </div>
</div>

<script src="js\jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.menu-line').click(function(){
            $('.sidebar_wrapper').toggleClass('hide')
        })

       
            $('.view').click(function(){
                $('.dropdown-1').toggleClass('hide-dropdown')
                $('.dropdown-2').addClass('hide-dropdown')
            })
            $('.add').click(function(){
                $('.dropdown-2').toggleClass('hide-dropdown')
                $('.dropdown-1').addClass('hide-dropdown')
            })
    })
</script>