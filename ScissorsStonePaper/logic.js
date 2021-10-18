let erlaubt = ['Stein', 'Schere', 'Papier'];
let spielzugSpieler;

function formatInput(spielzug) {
    return spielzug.substr(0,1).toUpperCase() + spielzug.substr(1).toLowerCase();
}

function play() {
    spielzugSpieler = formatInput(prompt('Gib deinen Spielzug ein (Schere, Stein, Papier): ').replaceAll(' ', ''));
    if(erlaubt.includes(spielzugSpieler) === -1){
        alert("Unerlaubter Spielzug");
        throw new Error('Unerlaubter Spielzug')
    } else {
        alert('Du hast ' + spielzugSpieler + ' eingegeben.');
    }

    let spielzugComputer = erlaubt[Math.floor(Math.random() * erlaubt.length)];
    alert('Der Computer spielt ' + spielzugComputer + '.');
    alert(auswerten(spielzugSpieler, spielzugComputer))
}

function auswerten(spielzugSpieler, spielzugComputer){
    if (spielzugSpieler === spielzugComputer) return "Unentschieden"
    else if (
        spielzugComputer === "Schere" && spielzugSpieler === "Papier" ||
        spielzugComputer === "Stein" && spielzugSpieler === "Schere" ||
        spielzugComputer === "Papier" && spielzugSpieler === "Stein") {
        return "Computer gewinnt"; }
    else return "Spieler gewinnt";
}

