<?php include "head.php"; ?>
<body>
    <p> Halo </p>
    <div id="text"> ini text </div>
<h1>Hello from Dr. Chuck's HTML Page</h1>
<p>
<?php
    for($i=0;$i<=10;$i++)
    {
        for($j=0;$j<=10;$j++)
        {
            echo $i * $j;
        }
        echo "</br>";
    }
?>
</p>
<p>Yes  <?php echo "Halo"; ?>  another paragraph.</p>

</body>
<script>
    x = 5;
    y = 10;
    document.getElementById("text").innerHTML = "ini tulisan";

</script>


</html>