const grille = document.querySelectorAll(".case")
const texteJeu = document.getElementById("texte");
let options = ["", "", "", "", "", "", "", "", ""];
const conditionsVictoire = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8],
    [0, 3, 6], [1, 4, 7], [2, 5, 8],
    [0, 4, 8], [2, 4, 6]
];
let joueurActuel = "cercle";
let tour = "O"
let enCours = false;

const jeuInit = () => {
    grille.forEach(caseVide => {
        caseVide.addEventListener("click", (e) => {
            const caseIndex = e.target.getAttribute("id");
            if (options[caseIndex] || !enCours) {
                console.log("quenouille")
                return;
            }
            nouveauSigne(e.target, caseIndex);
            victoire();
        });
    });
    texteJeu.innerHTML = `${joueurActuel} commence.`;
    enCours = true;
}
/*
const caseClique = () => {
    const caseIndex = this.id;
    console.log(caseIndex);
    if (options[caseIndex] || !enCours) {
        return;
    }
    const nouveauSigne = (caseIndex) => {
        options[caseIndex] = joueurActuel;
        const signe = document.createElement("div");
        signe.classList.add(joueurActuel);
        this.append(signe);
    }
    nouveauSigne(this, caseIndex);
    victoire();
    console.log("connard");
}
*/

const nouveauSigne = (c, i) => {
    options[i] = tour;
    c.classList.add(joueurActuel);
    c.textContent = tour;
}

const changeTour = () => {
    joueurActuel = joueurActuel === "cercle" ? "croix" : "cercle";
    tour = tour === "O" ? "X" : "O";
    texteJeu.innerHTML = `Au tour de ${joueurActuel}.`;
}

const victoire = () => {
    let gagne = false;
    for (let i = 0; i < conditionsVictoire.length; i++) {
        const condition = conditionsVictoire[i];
        const listeA = options[condition[0]];
        const listeB = options[condition[1]];
        const listeC = options[condition[2]];
        if (listeA === "" || listeB === "" || listeC === "") {
            continue;
        }
        if (listeA == listeB && listeB == listeC) {
            gagne = true;
            break;
        }
    }
    if (gagne) {
        texteJeu.innerHTML = `${joueurActuel} a gagné!`;
        enCours = false;
    } else if (!options.includes("")) {
        texteJeu.innerHTML = "Match nul!";
        enCours = false;
    } else {
        changeTour() 
    }
}

const jeuReset = () => {
    options = ["", "", "", "", "", "", "", "", ""];
    texteJeu.innerHTML = `Au tour de ${joueurActuel}.`;
    grille.forEach(c => {
        c.innerHTML = "";
    });
    enCours = true;
}


jeuInit();