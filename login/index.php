<!-- login form -->
<style>
    fieldset {border-bottom-right-radius: 30px;}
    input[type="email"] {margin-left: 20px;}
</style>
<div style="width: 300px; margin: 20px">
<form method="post" action="/login/process-form.php">
    <fieldset>
        <legend>LOGIN:</legend> <br> </br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"> <br></br>
        <label for="password">Password</label>
        <input type="text" id="class" name="password"> <br> </br>
        <input type="submit" value="Login">
</fieldset>
</form>
</div>
         