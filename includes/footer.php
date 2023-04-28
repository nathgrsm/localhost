<footer class="footer ">
    <div class="footer_bg">
        <div class="footer_container container grid">
            <div>
                <h1 class="footer_title"><?php echo $USER_prenom; ?></h1>
                <span class="footer_subtitle">Développeur</span>
            </div>
            <ul class="footer_links">
                <li>
                    <a href="#services" class="footer_link">Services</a>
                </li>
                <li>
                    <a href="#portfolio" class="footer_link">Portfolio</a>
                </li>
                <li>
                    <a href="#contact" class="footer_link">Contact</a>
                </li>
            </ul>
            <div class="footer_socials">
                <a href="<?php echo $USER_facebook; ?>" target="_blank" class="footer_social">
                    <i class="uil uil-facebook-f"></i>
                </a>
                <a href="<?php echo $USER_instagram; ?>" target="_blank" class="footer_social">
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="<?php echo $USER_twitter; ?>" target="_blank" class="footer_social">
                    <i class="uil uil-twitter-alt"></i>
                </a>
            </div>
        </div>
        <p class="footer_copy">&#169; 2023 <a class="footerd" href="https://nathanel.pro/">Designed By <?php echo $USER_prenom; ?>.</a>
        </p>
    </div>
</footer>