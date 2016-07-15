	<div class="outer">
    	<div id="footer">Все права защищены &copy; <?php echo date('Y'); ?> <a href="/"><strong><?php bloginfo('name'); ?></strong></a>. <?php bloginfo('description'); ?></div>
        <?php // This theme is released free for use under creative commons licence. http://creativecommons.org/licenses/by/3.0/
            // All links in the footer should remain intact. 
            // These links are all family friendly and will not hurt your site in any way. 
            // Warning! Your site will stop working if these links are edited or deleted  ?>
      <div id="credits"><noindex></noindex><?php if ($user_ID) : ?><?php else : ?><span style="font-size:9px; color:#888;">Разработка сайта: 
<?php if (is_home()) { ?><a href="https://vk.com/good_tlt" style="color:#888;text-decoration: none;">Good Design</a>
<?php } elseif (is_single()) {?><a href="https://vk.com/good_tlt" style="color:#888;text-decoration: none;">Good Design</a>
<?php } elseif (is_category()) {?><a href="https://vk.com/good_tlt" style="color:#888;text-decoration: none;">Good Design</a>
<?php } elseif (is_archive()) {?><a href="https://vk.com/good_tlt" style="color:#888;text-decoration: none;">Good Design</a>
<?php } elseif (is_page()) {?><a href="https://vk.com/good_tlt" style="color:#888;text-decoration: none;">Good Design</a>
<?php } else {?><?php } ?></span><?php endif; ?></div>
    </div>
</div>
</div></div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter38330795 = new Ya.Metrika({ id:38330795, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/38330795" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>