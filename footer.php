<footer class="footer">
        <div class="footer__wrapper wrapp-size">
            <div class="footer__logo">
                <a class="footer-logo" href="#"><img src="./images/logo.svg" alt="footer-logo"></a>
                <p>Netgain makes apps that simplify and automate complex finance and accounting challenges</p>
            </div>
			<?php wp_nav_menu( [
					'theme_location'  => 'footernetgain',
					'menu_class'      => 'footer__menu',
					'container'       => 'div',
					] ); 
				?>
            <div class="footer__contact">
                <h4 class="title-link">FOLLOW US</h4>
                <ul class="footer__social">
                    <li><a href="#" target="_blank" class="icon-social"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank" class="icon-social"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" class="icon-social"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#" target="_blank" class="icon-social"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
                <ul class="footer__contact-group">
                    <li>
                        <a href="tel:+18882223840" class="contact-item">
                            <svg class="contact-icon" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.49033 3.37254C1.80665 2.84878 3.5495 0.943765 4.79322 1.00127C5.165 1.03208 5.49364 1.25699 5.76067 1.51784C6.37379 2.11656 8.12897 4.38101 8.22859 4.85753C8.47096 6.02621 7.07833 6.6999 7.50454 7.87783C8.5911 10.5366 10.4634 12.4088 13.1233 13.4943C14.3003 13.9205 14.974 12.5279 16.1428 12.7713C16.6183 12.8709 18.8839 14.626 19.4826 15.2391C19.7425 15.5051 19.9684 15.8347 19.9992 16.2065C20.0454 17.5159 18.0222 19.2833 17.6278 19.5092C16.6974 20.1747 15.4834 20.1634 14.0035 19.4753C9.8739 17.7572 3.27426 11.2822 1.52422 6.99669C0.854611 5.52505 0.808391 4.30297 1.49033 3.37254Z" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            1 (888) 222-3840
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@netgain.tech" class="contact-item">
                            <svg class="contact-icon" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.3134 8L12.0481 11.4343C11.2409 12.0671 10.1093 12.0671 9.30205 11.4343L5 8"  stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.88787 1.5H15.3158C16.6752 1.51525 17.969 2.08993 18.896 3.0902C19.823 4.09048 20.3022 5.42903 20.222 6.79412V13.322C20.3022 14.6871 19.823 16.0256 18.896 17.0259C17.969 18.0262 16.6752 18.6009 15.3158 18.6161H5.88787C2.96796 18.6161 1 16.2407 1 13.322V6.79412C1 3.87545 2.96796 1.5 5.88787 1.5Z" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            info@netgain.tech
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>