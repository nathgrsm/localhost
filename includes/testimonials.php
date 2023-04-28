<section class="testimonial section">
	<h2 class="section_title">Témoignages</h2>
	<span class="section_subtitle">Ce que les autres disent de moi</span>
	<div class="testimonial_container container swiper-container">
		<div class="swiper-wrapper">

			<?php
			try {
                $sql = "SELECT * FROM testimonials";
                $stmt = $link->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                $rows = $result->fetch_all(MYSQLI_ASSOC);

                foreach ($rows as $row) {
					$TESTIMONIAL_id = $row["id"];
					$TESTIMONIAL_prenom = $row["prenom"];
					$TESTIMONIAL_statut = $row["statut"];
					$TESTIMONIAL_nombre_etoile = $row["nombre_etoile"];
					$TESTIMONIAL_commentaire = $row["commentaire"];
					$TESTIMONIAL_lien_image = $row["lien_image"];

					echo '
					<!--==================== TESTIMONIAL '.$TESTIMONIAL_id.' ====================-->
					<div class="testimonial_content swiper-slide">
						<div class="testimonial_data">
							<div class="testimonial_header">
								<img src="'.$TESTIMONIAL_lien_image.'" alt="" class="testimonial_img">
								<div>
									<h3 class="testimonial_name">'.$TESTIMONIAL_prenom.'</h3>
									<span class="testimonial_client">Élève de Guardia</span>
								</div>
							</div>
							<div>';

					for($i=0; $i<$TESTIMONIAL_nombre_etoile; $i++) {
						echo '<i class="uil uil-star testimonial_icon-star"></i>';
					}

					echo '</div>
							</div>
							<p class="testimonial_description">'.$TESTIMONIAL_commentaire.'</p>
						</div>
					';
				}
			}
			catch(PDOException $e) {
				echo "Erreur : " . $e->getMessage();
			}
			?>

			<div class="swiper-pagination swiper-pagination-testimonial"></div>
		</div>
    </div>
</section>