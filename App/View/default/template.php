<?php
if(isset($isAjax) && $isAjax == false):
	include_once($viewDir . $actionFile);
else:
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<?php include($viewDir . 'elements/head.php'); ?>
<body>
<?php include($viewDir . 'elements/header.php'); ?>
<div id="wrapper">
    <section class="main-content-container">
	    <!-- .main-content-contrainer-inner -->
        <div class="main-content-container-inner">
            <div class="header-separator"><div class="fl green-2"></div><div class="fl green-3"></div><div class="fl green-4"></div></div>
	        <!-- .main-content -->
			<div class="fl main-content">
			<?php include_once($viewDir . $actionFile); ?>
			</div>
	        <!-- /.main-content -->
	        <div class="fl main-content-right content-box">

                <!-- <h2><a href="install.html#installation-guide" title="Installation Guide">Installation Guide</a></h2>
                <p><a href="install.html#system-requirements" title="System requirements">System requirements</a></p>
                <p><a href="install.html#quick-install-for-beginners" title="Quick install for beginners">Quick install for beginners</a></p>
                <p><a href="install.html#quick-install-for-developers" title="Quick install for developers">Quick install for developers</a></p>
                <br> -->
				<div class="block getting-started-block">
					<h2><a href="<?php echo $baseUrl; ?>getting-started.html" title="Getting Started">Getting Started</a></h2>
					<p><a href="<?php echo $baseUrl; ?>getting-started.html#getting-the-source" title="Getting the source">Getting the source</a></p>
					<p><a href="<?php echo $baseUrl; ?>getting-started.html#configuration" title="Configuration">Configuration</a></p>
				</div>

		        <div class="block controller-block">
					<h2><a href="<?php echo $baseUrl; ?>controller.html" title="Using Controllers">Using Controllers</a></h2>
					<p><a href="<?php echo $baseUrl; ?>controller.html#making-your-controller" title="Making your controller">Making your controller</a></p>
					<p><a href="<?php echo $baseUrl; ?>controller.html#accessing-your-controller" title="Accessing your controller">Accessing your controller</a></p>
					<p><a href="<?php echo $baseUrl; ?>controller.html#controllers-with-arguments" title="Controllers with arguments">Controllers with arguments</a></p>
					<p><a href="<?php echo $baseUrl; ?>controller.html#loading-a-view" title="Loading a view">Loading a view</a></p>
					<p><a href="<?php echo $baseUrl; ?>controller.html#loading-an-ajax-view" title="Loading a view">Loading an ajax view</a></p>
					<p><a href="<?php echo $baseUrl; ?>controller.html#handling-forms" title="Handling forms">Handling forms</a></p>
					<p><a href="<?php echo $baseUrl; ?>controller.html#passing-data-to-a-view" title="Passing data to a view">Passing data to a view</a></p>
					<p><a href="<?php echo $baseUrl; ?>controller.html#defining-the-master-controller" title="Defining the master controller">Defining the master controller</a></p>
				</div>

		        <div class="block cache-block">
					<h2><a href="<?php echo $baseUrl; ?>cache.html" title="Using the cache">Using the cache</a></h2>
					<p><a href="<?php echo $baseUrl; ?>cache.html#accessing-the-cache" title="System requirements">Accessing The Cache</a></p>
					<p><a href="<?php echo $baseUrl; ?>cache.html#setting-cache-data" title="System requirements">Setting cache data</a></p>
					<p><a href="<?php echo $baseUrl; ?>cache.html#getting-cache-data" title="System requirements">Getting cache data</a></p>
					<p><a href="<?php echo $baseUrl; ?>cache.html#checking-if-data-exists" title="System requirements">Checking if data exists</a></p>
					<p><a href="<?php echo $baseUrl; ?>cache.html#removing-data" title="System requirements">Removing data</a></p>
				</div>

		        <div class="block request-block">
					<h2><a href="<?php echo $baseUrl; ?>get-and-post.html" title="">GET and POST</a></h2>
					<p><a href="<?php echo $baseUrl; ?>get-and-post.html#getting-params-from-the-url" title="System requirements">Getting params from the URL</a></p>
					<p><a href="<?php echo $baseUrl; ?>get-and-post.html#detecting-form-submits" title="System requirements">Detecting form submits</a></p>
					<p><a href="<?php echo $baseUrl; ?>get-and-post.html#getting-params-from-post" title="System requirements">Getting params from POST (form)</a></p>
					<p><a href="<?php echo $baseUrl; ?>get-and-post.html#checking-if-a-post-field-exists" title="System requirements">Checking if a POST field exists</a></p>
					<p><a href="<?php echo $baseUrl; ?>get-and-post.html#getting-post-fields-with-a-prefix" title="System requirements">Getting POST fields with a prefix</a></p>
					<p><a href="<?php echo $baseUrl; ?>get-and-post.html#adding-post-fields" title="System requirements">Adding POST fields</a></p>
					<p><a href="<?php echo $baseUrl; ?>get-and-post.html#removing-post-fields" title="System requirements">Removing POST fields</a></p>
					<p><a href="<?php echo $baseUrl; ?>get-and-post.html#emptying-post-data" title="System requirements">Emptying POST data</a></p>
				</div>

				<div class="block session-block">
					<h2><a href="<?php echo $baseUrl; ?>session.html" title="Using Sessions">Using Sessions</a></h2>
					<p><a href="<?php echo $baseUrl; ?>session.html#setting-session-data" title="System requirements">Setting session data</a></p>
					<p><a href="<?php echo $baseUrl; ?>session.html#getting-session-data" title="System requirements">Getting session data</a></p>
					<p><a href="<?php echo $baseUrl; ?>session.html#checking-if-data-exists" title="System requirements">Checking if data exists</a></p>
					<p><a href="<?php echo $baseUrl; ?>session.html#removing-data" title="System requirements">Removing data</a></p>
					<p><a href="<?php echo $baseUrl; ?>session.html#removing-all-data" title="System requirements">Removing all data</a></p>
					<p><a href="<?php echo $baseUrl; ?>session.html#setting-the-logged-in-users-data" title="System requirements">Setting the logged in users data</a></p>
					<p><a href="<?php echo $baseUrl; ?>session.html#getting-the-logged-in-users-data" title="System requirements">Getting the logged in users data</a></p>
				</div>

				<div class="block views-block">
                    <h2><a href="<?php echo $baseUrl; ?>views.html" title="Views">Views</a></h2>
					<p><a href="<?php echo $baseUrl; ?>views.html#loading-views" title="System requirements">Loading Views</a></p>
					<p><a href="<?php echo $baseUrl; ?>views.html#loading-an-ajax-view" title="System requirements">Loading an ajax view</a></p>
					<p><a href="<?php echo $baseUrl; ?>views.html#passing-data-to-views" title="System requirements">Passing data to loaded views</a></p>
					<p><a href="<?php echo $baseUrl; ?>views.html#ppi-view-variables" title="System requirements">PPI View Variables</a></p>
					<p><a href="<?php echo $baseUrl; ?>views.html#themeing" title="System requirements">Themeing</a></p>
					<p><a href="<?php echo $baseUrl; ?>views.html#rendering-engines" title="System requirements">Rendering Engines</a></p>
				</div>
	        </div>
        </div>
	    <!-- /.main-content-contrainer-inner -->
    </section>
</div> <!-- #wrapper -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="scripts/jquery-1.6.1.js"%3E%3C/script%3E'))</script>
<script type="text/javascript" src="scripts/jquery.scrollto.min.js"></script>
<script type="text/javascript">

hljs.tabReplace = '    ';
hljs.initHighlightingOnLoad();

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20964741-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!--[if lt IE 7 ]>
<script src="scripts/libs/dd_belatedpng.js"></script>
<script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg backgrounds </script>
<![endif]-->

</body>
</html>
<?php
endif;
?>