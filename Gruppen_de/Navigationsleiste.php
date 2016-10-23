<header>
<nav>
    <img src= alt="Logo"> <!-- Hier wird später noch die Bildquelle des Logos eingefügt -->
    
    <a href=/view_index.php?site=home>Home</a>
    
    <?php
    //Wenn User eingeloggt ist, wird dieser Teil im Menü angezeigt.
    //TODO: $isLoggedIn bestimmen lassen
    if ($isLoggedIn){
        echo "<a href=/view_index.php?site=sport>Sport</a>
              <a href=/view_index.php?site=kurse>Kurse</a>
              <a href=/view_index.php?site=statistik>Statistik</a>
              <a href=/view_index.php?site=profil>Profil</a>
              <a href=/view_index.php?site=logout>Logout</a>";
    }
    //Wenn nicht eingeloggt, wird dieser Teil angezeigt.
    else ()
        echo "<a href=/view_index.php?site=login>Login</a>";
    ?>
    
</nav>
</header>