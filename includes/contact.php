<section class="contact section" id="contact">
    <h2 class="section_title">Contactez-moi</h2>
    <span class="section_subtitle">Disponible 24/7</span>
    <div class="contact_container container grid">
        <div>
            <div class="contact_info">
                <i class="uil uil-phone contact_icon"></i>
                <div>
                    <h3 class="contact_title">Portable</h3>
                    <span class="contact_subtitle"><?php echo $USER_portable; ?></span>
                </div>
            </div>
            <div class="contact_info">
                <i class="uil uil-envelope contact_icon"></i>
                <div>
                    <h3 class="contact_title">Email</h3>
                    <span class="contact_subtitle"><?php echo $USER_mail; ?></span>
                </div>
            </div>
            <div class="contact_info">
                <i class="uil uil-map-marker contact_icon"></i>
                <div>
                    <h3 class="contact_title">Position</h3>
                    <span class="contact_subtitle"><?php echo $USER_ville.', '.$USER_pays; ?></span>
                </div>
            </div>
        </div>

        <!--==================== FORMULAIRE ====================-->
        <form class="contact_form grid" method="POST" action="javascript:void(0)" id="contact-form">
            <div class="contact_inputs grid">
                <div class="contact_content">
                    <label for="nom" class="contact_label">Nom complet</label>
                    <input type="text" class="contact_input" name="nom" id="nom">
                </div>
                <div class="contact_content">
                    <label for="email" class="contact_label">Email</label>
                    <input type="email" class="contact_input" name="email" id="email">
                </div>
            </div>
            <div class="contact_content">
                <label for="objet" class="contact_label">Objet du message</label>
                <input type="text" class="contact_input" name="objet" id="objet">
            </div>
            <div class="contact_content">
                <label for="message" class="contact_label">Message</label>
                <textarea cols="0" rows="7" class="contact_input" name="message" id="message"></textarea>
            </div>
            <div>
                <button type="submit" class="button button--flex btn" id="send-button">Envoyer<i class="uil uil-message button_icon"></i>
                </button>
            </div>
        </form>

        <?php
			// Connexion à la base de données
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "nathanel";

			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				// Sélection de toutes les entrées de la table "messages"
				$stmt = $conn->prepare("SELECT * FROM messages");
				$stmt->execute();

				// Affichage des entrées sous forme de liste
				echo "<ul>";
                echo "<strong>GOLD BOOK</strong>";
                echo "<br>";
				while ($row = $stmt->fetch()) {
                    echo "<br>";
					echo "<li>";
                    echo "<strong>MESSAGE " . $row['id'] . "<br></strong>";
					echo "<strong>• Nom :</strong> " . $row['nom'] . "<br>";
					echo "<strong>• Email :</strong> " . $row['email'] . "<br>";
					echo "<strong>• Objet :</strong> " . $row['objet'] . "<br>";
					echo "<strong>• Message :</strong> " . $row['message'] . "<br>";
					echo "</li>";
                    
				}
				echo "</ul>";
			}
			catch(PDOException $e) {
				echo "Erreur : " . $e->getMessage();
			}

			$conn = null;
			?>

    </div>
</section>