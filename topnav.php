<div class="topnav">
    <a href="#home" class="active">
        <div class="bold">
            <?php echo $topnav_title; ?>
        </div>
    </a>
    <div id="myLinks">
        <a href="../index.html">HOME</a>
        <a href="product_list.php">RESERVATION</a>
        <a href="reservation_check.php">MODIFY</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>