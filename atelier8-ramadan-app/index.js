const express = require('express');
const path = require('path');

const app = express();
const PORT = 4000;

// Définir le dossier "public" pour les fichiers statiques
app.use(express.static('public'));

// Définir la route pour retourner la page web
app.get('/ramadan', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// Lancer le serveur
app.listen(PORT, () => {
    console.log(`Application Ramadan en cours d'exécution sur http://localhost:${PORT}/ramadan`);
});