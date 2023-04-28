function submitForm() {
    var formData = $('#contact-form').serialize(); // Récupère les données du formulaire

    $.ajax({
        url: '../php/form-contact.php', // L'URL de votre script PHP qui traite le formulaire
        type: 'POST', // Méthode d'envoi des données
        data: formData, // Les données à envoyer
        success: function(response) {
            // Ce code est exécuté si la requête AJAX réussit
            console.log(response); // Affiche la réponse du serveur dans la console
            Swal.fire('Merci!', 'Votre message a été envoyé!', 'success');
        },
        error: function(xhr, status, error) {
            // Ce code est exécuté si la requête AJAX échoue
            console.log(xhr.responseText); // Affiche l'erreur dans la console
            Swal.fire('Oops...', 'Une erreur s\'est produite. Veuillez réessayer.', 'error');
        }
    });
}

$(document).ready(function() {
    $('#send-button').click(function(e) {
        e.preventDefault(); // Empêche la soumission du formulaire par défaut

        if ($('#nom').val() === '' || $('#email').val() === '' || $('#objet').val() === '' || $('#message').val() === '') {
            Swal.fire('Attention', 'Veuillez remplir tous les champs.', 'warning');
            return;
        }

        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test($('#email').val())) {
            Swal.fire('Attention', 'Veuillez entrer une adresse email valide.', 'warning');
            return;
        }

        submitForm();
    });
});