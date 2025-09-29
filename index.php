<?php include "head.php"; ?>
<body>

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
<div id="text"></div>
<div id="text2"></div>
</body>
<script>
    x = 5;
    y = 10;
    document.getElementById("text").innerHTML = "ini tulisan";
    document.getElementById("text2").innerHTML = "ini tulisan";
</script>


</html>