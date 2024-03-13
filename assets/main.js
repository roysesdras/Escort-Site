// Attendre 10 secondes avant d'afficher la popup
setTimeout(function() {
    document.getElementById('popup-container').style.display = 'block';
}, 10000);

// Gérer la fermeture de la popup
document.getElementById('close-button').addEventListener('click', function() {
    document.getElementById('popup-container').style.display = 'none';
});
