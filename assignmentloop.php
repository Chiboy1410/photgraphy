
<?php
$i = 1;
while ($i <=100) {
    echo"<div class=box>$i</div>";
    $i++;
}
?>
<style>
.box{
    height:100px;
    width:100px;
    background-color: blue;
    text-align:center;
    display:inline-block;
    margin:20px 20px 0 0; 
    line-height:100px;
    font-size: 30px;
    color:white;
}
 /* .blue{
    background-color: #007fff
}
.orange{
    background-color: orange; 
} */
</style>