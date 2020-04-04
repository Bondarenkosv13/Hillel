<div align="center">
    <form method="post">
        Логин: <br>
        <input name="login" type="text" maxlength="16"  value="<?php echo $name;?>"><br>
        Пароль: <br>
        <input name="password" type="password" minlength="8" value="<?php echo $password;?>"><br>
        E-mail: <br>
        <input name="email" type="email" value="<?php echo $email;?>"><br>
        Расскажи о себе: <br>
        <textarea rows="10" cols="45" name="text"><?php echo $text;?></textarea><br><br>
        <input type="submit" name="form" value="Send">
    </form>
</div>

