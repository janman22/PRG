<nav>
    <img src=images/test.png alt="Logo">
    
    <a href=/home>Home</a>
    
    <?php
    //Wenn User eingeloggt ist, wird dieser Teil im Menü angezeigt.
    if (isLoggedIn){
        echo "<a href=/sport>Sport</a>
              <a href=/kurse>Kurse</a>
              <a href=/statistik>Statistik</a>
              <a href=/profil>Profil</a>
              <a href=/logout>Logout</a>";
    }
    //Wenn nicht eingeloggt, wird dieser Teil angezeigt.
    else ()
        echo "<a href=/login>Login/Registrieren</a>";
    ?>
    
</nav>