<?php wp_footer(); ?>
<footer class="container-fluid pwp-footer">
    <section class="pwp-footer-content">
        <img src="<?php echo TEMPLATE . '/assets/images/logo-footer.png'; ?>" alt="logo footer pedro avelar">
        <nav class="pwp-footer-content__menu">
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'menu-navegacao',
                        'menu_id' => 'menu-principal',
                        'menu_class' => 'navbar-nav',
                    )
                ); 
            ?>
        </nav>
        <div class="pwp-footer-content-social-media">
                <ul class="pwp-footer-content-social-media__icons">
                    <a href="https://www.instagram.com/pedroo_avelar/" target="_blank">
                        <li class="instagram-icon">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="#05DAC0" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.0038 8.28283C12.1797 8.28283 8.28857 12.1748 8.28857 17C8.28857 21.8252 12.1797 25.7172 17.0038 25.7172C21.8279 25.7172 25.719 21.8252 25.719 17C25.719 12.1748 21.8279 8.28283 17.0038 8.28283ZM17.0038 22.6673C13.8863 22.6673 11.3378 20.1257 11.3378 17C11.3378 13.8743 13.8788 11.3327 17.0038 11.3327C20.1288 11.3327 22.6698 13.8743 22.6698 17C22.6698 20.1257 20.1212 22.6673 17.0038 22.6673V22.6673ZM28.1083 7.92625C28.1083 9.05668 27.1981 9.9595 26.0755 9.9595C24.9453 9.9595 24.0427 9.04909 24.0427 7.92625C24.0427 6.80341 24.9529 5.893 26.0755 5.893C27.1981 5.893 28.1083 6.80341 28.1083 7.92625ZM33.8805 9.98985C33.7516 7.26621 33.1296 4.85362 31.1347 2.86589C29.1475 0.878166 26.7354 0.256053 24.0124 0.119491C21.2059 -0.0398304 12.7941 -0.0398304 9.98762 0.119491C7.27217 0.248466 4.86012 0.870579 2.86525 2.85831C0.870385 4.84603 0.255996 7.25862 0.119465 9.98226C-0.0398215 12.7894 -0.0398215 21.2031 0.119465 24.0102C0.24841 26.7338 0.870385 29.1464 2.86525 31.1341C4.86012 33.1218 7.26458 33.7439 9.98762 33.8805C12.7941 34.0398 21.2059 34.0398 24.0124 33.8805C26.7354 33.7515 29.1475 33.1294 31.1347 31.1341C33.122 29.1464 33.744 26.7338 33.8805 24.0102C34.0398 21.2031 34.0398 12.7969 33.8805 9.98985V9.98985ZM30.2549 27.0221C29.6632 28.5091 28.5179 29.6547 27.0236 30.254C24.7861 31.1417 19.4765 30.9369 17.0038 30.9369C14.5311 30.9369 9.21394 31.1341 6.98394 30.254C5.49727 29.6623 4.35192 28.5167 3.75271 27.0221C2.86525 24.784 3.07005 19.4733 3.07005 17C3.07005 14.5267 2.87284 9.20841 3.75271 6.97791C4.34434 5.49091 5.48968 4.34531 6.98394 3.74596C9.22153 2.85831 14.5311 3.06315 17.0038 3.06315C19.4765 3.06315 24.7936 2.86589 27.0236 3.74596C28.5103 4.33772 29.6557 5.48332 30.2549 6.97791C31.1423 9.216 30.9375 14.5267 30.9375 17C30.9375 19.4733 31.1423 24.7916 30.2549 27.0221Z" fill="#05DAC0"/>
                            </svg>
                        </li>
                    </a>
                    <a href="https://www.linkedin.com/in/pedro-emanuel-de-avelar-sousa-de-almeida-10a337160/" target="_blank">
                        <li class="linkedin-icon">
                            <svg width="34" height="38" viewBox="0 0 34 38" fill="#05DAC0" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.61054 37.9985H0.561607V12.6282H7.61054V37.9985ZM4.08228 9.16746C1.82826 9.16746 0 7.08083 0 4.56161C1.61333e-08 3.35154 0.430096 2.19103 1.19567 1.33537C1.96125 0.479723 2.99959 -0.000976563 4.08228 -0.000976562C5.16496 -0.000976563 6.20331 0.479723 6.96888 1.33537C7.73446 2.19103 8.16455 3.35154 8.16455 4.56161C8.16455 7.08083 6.33554 9.16746 4.08228 9.16746ZM33.9924 37.9985H26.9587V25.6484C26.9587 22.7051 26.9055 18.9305 23.2938 18.9305C19.6289 18.9305 19.0673 22.1283 19.0673 25.4364V37.9985H12.026V12.6282H18.7865V16.089H18.8852C19.8262 14.0956 22.125 11.992 25.5546 11.992C32.6886 11.992 34 17.2425 34 24.0622V37.9985H33.9924Z" fill="#05DAC0"/>
                            </svg>
                        </li>
                    </a>
                    <a href="https://www.facebook.com/pedro.emanuel.338863" target="_blank">
                        <li class="facebook-icon">
                            <svg width="18" height="39" viewBox="0 0 18 39" fill="#05DAC0" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.8204 21.937L17.7538 14.879H11.9177V10.2989C11.9177 8.36803 12.7329 6.48587 15.3468 6.48587H17.9999V0.476824C17.9999 0.476824 15.5922 0 13.2902 0C8.48404 0 5.34248 3.38042 5.34248 9.49992V14.879H0V21.937H5.34248V38.999H11.9177V21.937H16.8204Z" fill="#05DAC0"/>
                            </svg>
                        </li>
                    </a>
                    <a href="https://github.com/Pedroemanuelavelar" target="_blank">
                        <li class="github-icon">
                            <svg width="35" height="38" viewBox="0 0 35 38" fill="#05DAC0" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.7067 30.5962C11.7067 30.7533 11.5444 30.879 11.3397 30.879C11.1069 30.9026 10.9446 30.7769 10.9446 30.5962C10.9446 30.439 11.1069 30.3133 11.3115 30.3133C11.5232 30.2897 11.7067 30.4155 11.7067 30.5962ZM9.5121 30.2426C9.4627 30.3997 9.60383 30.5805 9.81553 30.6276C9.99899 30.7062 10.2107 30.6276 10.253 30.4705C10.2954 30.3133 10.1613 30.1326 9.9496 30.0619C9.76613 30.0069 9.56149 30.0854 9.5121 30.2426ZM12.631 30.109C12.4264 30.164 12.2853 30.3133 12.3065 30.494C12.3276 30.6512 12.5111 30.7533 12.7228 30.6983C12.9274 30.6433 13.0685 30.494 13.0474 30.3369C13.0262 30.1876 12.8357 30.0854 12.631 30.109ZM17.2742 -0.000976562C7.4869 -0.000976562 0 8.27298 0 19.1714C0 27.8853 4.9254 35.3421 11.9607 37.9665C12.8639 38.1472 13.1815 37.5265 13.1815 37.0158C13.1815 36.5286 13.1603 33.8413 13.1603 32.1912C13.1603 32.1912 8.22077 33.3699 7.18347 29.8497C7.18347 29.8497 6.37903 27.5632 5.22177 26.9739C5.22177 26.9739 3.60585 25.7402 5.33468 25.7638C5.33468 25.7638 7.09173 25.921 8.05847 27.791C9.60383 30.824 12.1935 29.9519 13.2026 29.4333C13.3649 28.1761 13.8236 27.3039 14.3317 26.7853C10.3871 26.2981 6.40726 25.6617 6.40726 18.1027C6.40726 15.9419 6.94355 14.8576 8.07258 13.4747C7.88911 12.9639 7.28931 10.8581 8.25605 8.13941C9.73085 7.62867 13.125 10.2609 13.125 10.2609C14.5363 9.82091 16.0534 9.59305 17.5565 9.59305C19.0595 9.59305 20.5766 9.82091 21.9879 10.2609C21.9879 10.2609 25.3821 7.62081 26.8569 8.13941C27.8236 10.866 27.2238 12.9639 27.0403 13.4747C28.1694 14.8654 28.8609 15.9498 28.8609 18.1027C28.8609 25.6852 24.7046 26.2903 20.7601 26.7853C21.4093 27.406 21.9597 28.5847 21.9597 30.4312C21.9597 33.0791 21.9385 36.3557 21.9385 37C21.9385 37.5108 22.2631 38.1315 23.1593 37.9508C30.2157 35.3421 35 27.8853 35 19.1714C35 8.27298 27.0615 -0.000976562 17.2742 -0.000976562ZM6.85887 27.0996C6.76714 27.1782 6.78831 27.3589 6.90827 27.5082C7.02117 27.6339 7.18347 27.6889 7.2752 27.5867C7.36694 27.5082 7.34577 27.3274 7.22581 27.1782C7.1129 27.0524 6.9506 26.9974 6.85887 27.0996ZM6.09677 26.4631C6.04738 26.5653 6.11794 26.691 6.25907 26.7696C6.37198 26.8481 6.5131 26.8246 6.5625 26.7146C6.6119 26.6124 6.54133 26.4867 6.4002 26.4081C6.25907 26.361 6.14617 26.3845 6.09677 26.4631ZM8.38306 29.2604C8.27016 29.3625 8.3125 29.5983 8.4748 29.7476C8.6371 29.9283 8.84173 29.9519 8.93347 29.8261C9.0252 29.724 8.98286 29.4883 8.84173 29.339C8.68649 29.1582 8.4748 29.1347 8.38306 29.2604ZM7.57863 28.1053C7.46573 28.1839 7.46573 28.3882 7.57863 28.5689C7.69153 28.7497 7.88206 28.8282 7.97379 28.7497C8.08669 28.6475 8.08669 28.4432 7.97379 28.2625C7.875 28.0818 7.69153 28.0032 7.57863 28.1053Z" fill="#05DAC0"/>
                            </svg>
                        </li>
                    </a>
                    <a href="https://twitter.com/emanuel_asa" target="_blank">
                        <li class="twitter-icon">
                            <svg width="42" height="38" viewBox="0 0 42 38" fill="#05DAC0" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.6828 9.47016C37.7095 9.88576 37.7095 10.3014 37.7095 10.717C37.7095 23.3934 29.0484 37.9995 13.2183 37.9995C8.34138 37.9995 3.81094 36.426 0 33.6949C0.692921 33.7839 1.3591 33.8136 2.07868 33.8136C6.10274 33.8136 9.80712 32.2996 12.7653 29.7168C8.98098 29.6278 5.80964 26.8669 4.71698 23.0669C5.25002 23.1559 5.78298 23.2153 6.34268 23.2153C7.1155 23.2153 7.8884 23.0965 8.6079 22.8888C4.66374 21.9981 1.70552 18.1388 1.70552 13.4779V13.3592C2.85142 14.0717 4.18402 14.517 5.59636 14.5763C3.27782 12.8544 1.75884 9.91545 1.75884 6.59047C1.75884 4.80928 2.18516 3.17649 2.9314 1.7515C7.16874 7.57017 13.5381 11.3701 20.6802 11.7857C20.5469 11.0732 20.467 10.3311 20.467 9.58895C20.467 4.30458 24.3046 0 29.0749 0C31.5533 0 33.7918 1.15779 35.3642 3.02808C37.3096 2.61249 39.1751 1.81089 40.8274 0.712496C40.1878 2.93908 38.8287 4.80937 37.0432 5.99677C38.7754 5.78906 40.4544 5.25458 42 4.51247C40.8276 6.41237 39.3618 8.10447 37.6828 9.47016Z" fill="#05DAC0"/>
                            </svg>
                        </li>
                    </a>
                </ul>
        </div>
    </section>
    <section class="pwp-copy-footer">
        <p class="text-center pwp-copy-footer">©<?php echo date('Y'); ?> Pedro Avelar. Todos os direitos reservados. </p>
    </section>
</footer>
</main>
</body>
</html>