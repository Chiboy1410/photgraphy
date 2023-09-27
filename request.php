<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = "No name";
}
if (isset($_GET['class'])) $class = $_GET['class'];
else $class = "not set"
// $name = $_GET[ 'name'];
// $class = $_GET[ 'class'];
?>
<h1>Welcome <?= $name ?></h1>
<p>Your <?= $class ?> class is starting</p>
?>
<div style="width: 300px;">
    <form action="request.php" method="get">
        <fieldset>
            <legend style="color: blue;">GET REQUEST:</legend>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br /><br/>
            <label for="class">Class:</label>
            <input type="text" id="class" name="class"><br /><br />
            <input type="submit" value="submit">
        </fieldset>
    </form>
</div>