<section class="qualification section">
    <h2 class="section_title ">Expériences</h2>
    <span class="section_subtitle ">Mes formations et mes emplois</span>
    <div class="qualification_container container ">
        <div class="qualification_tabs ">
            <div class="qualification_button button--flex qualification_active" data-target='#education'>
                <i class="uil uil-graduation-cap qualification_icon "></i> Formations
            </div>
            <div class="qualification_button button--flex" data-target='#work'>
                <i class="uil uil-suitcase qualification_icon "></i> Emplois
            </div>
        </div>
        <div class="qualification_sections ">

            <!--==================== QUALIFICATION Content 1 ====================-->
            <div class="qualification_content qualification_active" data-content id='education'>
            <?php
			try {
                $sql = "SELECT * FROM experience";
                $stmt = $link->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                $rows = $result->fetch_all(MYSQLI_ASSOC);

                $COUNTER_rounder_line = 0;
                $rounder_line = '
                <div>
                    <span class="qualification_rounder"></span>
                    <span class="qualification_line"></span>
                </div>
                ';

				foreach ($rows as $row) {
					$FORMATION_id = $row["id"];
					$FORMATION_nom_ecole = $row["nom_ecole"];
                    $FORMATION_statut = $row["statut"];
					$FORMATION_niveau = $row["niveau"];
					$FORMATION_annee_debut = $row["annee_debut"];
					$FORMATION_annee_fin = $row["annee_fin"];
					
                    echo '
                        <!--==================== QUALIFICATION '.$FORMATION_id.' ====================-->
                        <div class="qualification_data ">';
                            
                            if ($COUNTER_rounder_line%2 != 0) {
                                echo '<div></div>'.$rounder_line;
                            }

                            echo '
                            <div>
                                <h3 class="qualification_title ">'.$FORMATION_nom_ecole.'</h3>
                                <span class="qualification_subtitle ">'.$FORMATION_statut.'<br>'.$FORMATION_niveau.'</span>
                                <div class="qualification_calendar ">
                                    <i class="uil uil-schedule "></i>
                                    '.$FORMATION_annee_debut.' - '.$FORMATION_annee_fin.'
                                </div>
                            </div>
                            ';

                            if ($COUNTER_rounder_line%2 == 0) {
                                echo $rounder_line;
                            }

                        echo '
                        </div>
                        ';
                        $COUNTER_rounder_line++;
				}
			}
			catch(PDOException $e) {
				echo "Erreur : " . $e->getMessage();
			}
			?>
            </div>
            
            <!--==================== QUALIFICATION Content 2 ====================-->
            <div class="qualification_content" data-content id='work'>
            <?php
            try {
                $sql = "SELECT * FROM jobs";
                $stmt = $link->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                $rows = $result->fetch_all(MYSQLI_ASSOC);

                $EMPLOI_rounder_line = 0;
                $rounder_line = '
                <div>
                    <span class="qualification_rounder"></span>
                    <span class="qualification_line"></span>
                </div>
                ';

                foreach ($rows as $row) {
					$EMPLOI_id = $row["id"];
					$EMPLOI_nom_entreprise = $row["nom_entreprise"];
                    $EMPLOI_nom_emploi = $row["nom_emploi"];
					$EMPLOI_annee_debut = $row["annee_debut"];
					$EMPLOI_annee_fin = $row["annee_fin"];
                    $EMPLOI_description = $row["description"];
					
                    echo '
                        <!--==================== QUALIFICATION '.$EMPLOI_id.' ====================-->
                        <div class="qualification_data ">';
                            
                            if ($EMPLOI_rounder_line%2 != 0) {
                                echo '<div></div>'.$rounder_line;
                            }

                            echo '
                            <div>
                                <h3 class="qualification_title ">'.$EMPLOI_nom_entreprise.'</h3>
                                <span class="qualification_subtitle ">'.$EMPLOI_nom_emploi.'<br>'.$EMPLOI_description.'</span>
                                <div class="qualification_calendar ">
                                    <i class="uil uil-schedule "></i>
                                    '.$EMPLOI_annee_debut.' - '.$EMPLOI_annee_fin.'
                                </div>
                            </div>
                            ';

                            if ($EMPLOI_rounder_line%2 == 0) {
                                echo $rounder_line;
                            }

                        echo '
                        </div>
                        ';
                        $EMPLOI_rounder_line++;
				}
			}
			catch(PDOException $e) {
				echo "Erreur : " . $e->getMessage();
			}
			?>
            
            </div>
        </div>
    </div>
</section>