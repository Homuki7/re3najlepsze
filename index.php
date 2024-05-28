<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Najlepsza Gra Ever</title>
    <link rel="icon" href="img/ikonka.png">
    <link rel="stylesheet" href="style.css">
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
<section class="wszystko">
    <header class="baner">
        <div class="container">
            <img src="img/re3.png" alt="" class="re3">
        </div>
    </header>

    <section class="lewy">

    </section>

    <section class="srodkowy">
        <div class="ocena"><h2>Ocena</h2>
            <div class="liczba">10</div>
            <img src="img/re3okladka.png" alt="" class="okladkare3">
        </div>
        <div>
            <h2 class="tytul">Recenzja gry Resident Evil 3: Nemesis</h2 class="tytul">
        </div>
        <div class="calarecenzja">
            "Resident Evil 3: Nemesis" to nie tylko gra. To majstersztyk, który wkracza do świata gracza, by go pochłonąć w wir emocji, tajemnic i strachu. Jest  to jedna z tych gier, które stają się ikonami swojego gatunku, pozostawiając niezatarte wrażenie na każdym, kto miał przyjemność zanurzyć się w jej świat.
            Wcielając się w postać Jill Valentine, gracze zostają wrzuceni w serce apokaliptycznego koszmaru, jakim stało się Raccoon City. To miasto, które kiedyś tętniło życiem, teraz pogrążone jest w chaosie i śmierci. A w tym mrocznym świecie, niebezpieczeństwo czai się na każdym kroku. Nemesis, potężny bio-organizm zaprogramowany do eliminacji, stoi na drodze Jill, gotowy zniszczyć wszystko, co stanie mu na drodze.           
            Jednak to nie tylko strach przed potworami i przerażającymi zombiakami sprawia, że "Resident Evil 3: Nemesis" jest tak wyjątkowe. To także fabuła, która wciąga od pierwszej do ostatniej chwili, zaskakując gracza nieprzewidywalnymi zwrotami akcji i nieoczekiwanymi wydarzeniami. To unikalne i innowacyjne rozwiązania dla gatunku survival horror, które sprawiają, że każde podejmowane przez gracza decyzje mają realny wpływ na przebieg gry.        
            A atmosfera... To coś, co trudno opisać słowami. Opustoszałe ulice miasta, mroczne laboratoria, podziemne kanały - każda lokacja w grze jest przesiąknięta grozą i tajemnicą, co sprawia, że nawet najmniejszy szmer może wywołać dreszcze na plecach. To także grafika, dźwięk i aktorstwo głosowe, które doskonale oddają klimat rozpaczliwej walki o przetrwanie.
            Podsumowując, "Resident Evil 3: Nemesis" to więcej niż gra. To doświadczenie, którego nie zapomnisz. To podróż przez mrok i strach, która trzyma cię w napięciu od pierwszej do ostatniej chwili. To dzieło sztuki, które zasługuje na uznanie i szacunek wszystkich miłośników gier. Dlatego też, z czystym sumieniem, przyznaję tej grze ocenę 10/10.
        </div>
            <div class="zdjecie1">
                <img src="img/re31zdjecie.jpg" alt="" srcset="" class="re31">
            </div>
            <div class="zdjecie2">
                <img src="img/re32zdjecie.jpg" alt="" srcset="" class="re32">
            </div>
            <div class="zdjecie3">
                <img src="img/re33zdjecie.jpg" alt="" srcset="" class="re33">
            </div>
            <div class="zdjecie4">
                <img src="img/re34zdjecie.png" alt="" srcset="" class="re34">
            </div>
        <div class="linia">
        </div>
            <div class="komentarze">
                <h2>Dodaj Komentarz</h2>
            </div>
        <div class="dodajkomentarz">
            <form action="dodawaniekomentarzy.php" method="post">
                <label for="nick" class="labely">Nick: <div class="malaczcionka">(Max 16 Znaków)</div></label><br>
                <input type="text" name="nick" maxlength="16"><br>
                <label for="komentarz" class="labely">Komentarz: <div class="malaczcionka">(Max 300 Znaków)</div></label><br>
                <textarea name="komentarz" id="" class="komentarz" maxlength="300"></textarea><br>
                <input type="submit" value="Opublikuj" class="fancyprzycisk">
            </form>
        </div>
        <div class="linia">
        </div>
        <div class="komentarzepokaz">
            <h2>Komentarze</h2>
            <?php
                $polaczenie = mysqli_connect("localhost", "root", "", "re3najlepsze");
                $php = "SELECT `nick`, `komentarz` FROM `komentarze`";
                $wynik = mysqli_query($polaczenie, $php);
                while($row = mysqli_fetch_array($wynik)) {
                    echo"<div class='komentarzbaza'> 
                            <div class='czcionka'>$row[0]</div><br>
                            $row[1]
                        </div>";
                }
            ?>
        </div>
        <div class="linian">
        </div>
        <div class="nawigacja">
            <button id="poprzednia-strona" onclick="zmienStrone(-1)">Poprzednia</button>
            <button id="nastepna-strona" onclick="zmienStrone(1)">Następna</button>
        </div>
    </section>

    <section class="prawy">

    </section>

    <footer class="stopka">
    
    </footer>
</section>
</body>
</html>
<script src="script.js"></script>