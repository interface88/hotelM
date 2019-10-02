    <?php if ( ! isset($show) || $show == true) : ?>
    <hr />
    <footer class="footer">
        <div class="container">
            <p>Powered by <a href="http://cibonfire.com" target="_blank">Bonfire <?php echo BONFIRE_VERSION; ?></a></p>
        </div>
    </footer>
    <?php endif; ?>
	<div id="debug"><!-- Stores the Profiler Results --></div>
    <?php echo Assets::js(); ?>
   </div>
</body>
</html>