const zoneDeJeu = document.getElementById("grille");
const texteJeu = document.getElementById("texte");
const grille = ["", "", "", "", "", "", "", "", ""]
let tour = "cercle";

texteJeu.innerHTML = "Cercle commence."

const grilleInit = () => {
    grille.forEach((nouvelleCase, i) => {
        const caseVide = document.createElement("div");
        caseVide.classList.add("case");
        caseVide.id = i;
        caseVide.addEventListener("click", coup);
        zoneDeJeu.append(caseVide);
    });
}

const coup = (e) => {
    const nouveauCoup = document.createElement("div");
    nouveauCoup.classList.add(tour);
    e.target.append(nouveauCoup);
    tour = tour === "cercle" ? "croix" : "cercle";
    texteJeu.innerHTML = `Au tour de ${tour}.`;
    e.target.removeEventListener("click", coup);
    conditionVictoire();
    matchNul();
}

const conditionVictoire = () => {
    const grilleEntiere = document.querySelectorAll(".case")
    const conditions = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8],
        [0, 3, 6], [1, 4, 7], [2, 5, 8],
        [0, 4, 8], [2, 4, 6]
    ];
    conditions.forEach(liste => {
        const cercleGagne = liste.every(caseCochee => {
            grilleEntiere[caseCochee].firstChild?.classList.contains("cercle");
        })
        if (cercleGagne) {
            texteJeu.innerHTML = "Cercle a gagné!";
            grilleEntiere.forEach(caseCochee => {
                caseCochee.replaceWith(caseCochee.cloneNode(true));
            })
        }
    })
}

const matchNul = () => {

}

grilleInit();