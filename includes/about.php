<section class="about section" id="about">
    <h2 class="section_title">À propos</h2>
    <span class="section_subtitle">Me découvrir</span>
    <div class="about_container container grid">
        <img src="img/ec2-2.webp" alt="" class="about_img">
        <div class="about_data">
            <p class="about_description"><?php echo $USER_description2; ?></p>
            <div class="about_info">
                <div>
                    <span class="about_info-title"><?php echo $USER_nb_failles; ?>+</span>
                    <span class="about_info-name">Failles <br> trouvés </span>
                </div>
                <div>
                    <span class="about_info-title"><?php echo $USER_nb_competitions; ?>+</span>
                    <span class="about_info-name">Compétitions <br> réalisées </span>
                </div>
                <div>
                    <span class="about_info-title"><?php echo $USER_nb_outils; ?>+</span>
                    <span class="about_info-name">Outils <br> maîtrisés </span>
                </div>
            </div>
            <div class="about_buttons">
                <a download="" href="https://nathanel.pro/cv" class="button button--flex">Télécharger mon CV <i class="uil uil-download-alt button_icon"></i>
                </a>
            </div>
        </div>
    </div>
</section>