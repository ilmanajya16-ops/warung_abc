<!DOCTYPE html>
<html>
    <head>
        <title> Login - Warung ABC</title>
    </head>
    <body>
        <h1>Login Aplikasi Kasir Warung ABC</h1>

        <?php
        session_start();
        if (isset($SESSION['pesan error'])) {
            echo '<p>' . $_SESSION ['pesan error']. '</p>';
            unset($_SESSION['pesan_error']);
    }
    ?>

        <form action="proses_login.php" method="POST">
        <table>
        <tr>
            <td>Username</td>
            <tb>;</td>
            <td><input type="text" name= "username" required></td>
        </tr>
        <tr>
            <td>password</td>
            <tb>;</td>
            <td><input type="password" name= "password" required></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <input type="submit" value= "Login">
          </td>
       </tr>
    </table>
    </form>        
</body>
</html>