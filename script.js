let aktualnaStrona = 1;
let komentarzeNaStrone = 5; // Przeniesienie tej zmiennej na poziom globalny

function wyswietlKomentarze() {
    const komentarze = document.querySelectorAll('.komentarzbaza');
    const start = (aktualnaStrona - 1) * komentarzeNaStrone;
    const end = start + komentarzeNaStrone;

    komentarze.forEach((komentarz, index) => {
        komentarz.classList.add('ukryty');
        if (index >= start && index < end) {
            komentarz.classList.remove('ukryty');
        }
    });
}

function zmienStrone(kierunek) {
    aktualnaStrona += kierunek;
    wyswietlKomentarze();
    aktualizujNawigacje();
}

function aktualizujNawigacje() {
    const komentarze = document.querySelectorAll('.komentarzbaza');
    document.getElementById('poprzednia-strona').disabled = aktualnaStrona === 1;
    document.getElementById('nastepna-strona').disabled = aktualnaStrona === Math.ceil(komentarze.length / komentarzeNaStrone);
}

window.onload = function() {
    wyswietlKomentarze();
    aktualizujNawigacje();
}
