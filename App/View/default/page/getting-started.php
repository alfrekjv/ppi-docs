<div class="content-box">
	<h1>Introduction</h1>
	<p>The following is an introduction to getting the PPI framework + application and configuring it appropriately. Before you begin you will need a LAMP/WAMP/MAMP setup. If you need a database for your application then get your DB client ready and fired up.</p>
</div>
<div class="content-box">
	<h1>Getting the source</h1>
	<h2>Framework</h2>
	<p>The PPI Framework is a stand-alone library which is booted up from your PPI application. This means that you can have one repository powering 10 PPI applications at the same time. One benefit of this is that if you perform an update to the framework then all of your 10 applications will automatically be updated rather than having to update 10 different applications.</p>
	<p>&nbsp;</p>
	<p><a href="http://github.com/dragoonis/ppi-framework" title="Github Framework Repository">Github Framework Repository</a></p>
	<p>&nbsp;</p>
	<h2>Application</h2>
	<p>The PPI Skeleton Application is available for download and from this you will be able to quickly have a static HTML site up and running in a jiffy.</p>
	<p>&nbsp;</p>
	<p><a href="http://github.com/dragoonis/ppi-skeleton-app" title="Github Applicaiton Repository">Github Application Repository</a></p>
</div>
<div class="content-box">
	<h1>Configuration</h1>
	<h2>Bootstrap</h2>
	<p>To get things started you'll need to configure your Bootstrap file (index.php)</p>
	<pre><code class="php">
include('../ppi/init.php');
$app = new PPI_App();
$app->boot()->dispatch();
	</pre></code>

	<h2>Config File</h2>
	<p>The second thing you'll need to do is configure your application's config file. By default this is located in <span class="light">/App/Config/general.ini</span>.</p>

	<h3>Config Option: BaseUrl</h3>
	<p>Change the baseUrl to your sites root, with an ending slash.</p>
	<pre><code class="ini">
system.base_url = http://localhost/mysite/
	</pre></code>

	<h3>Config Option: MasterController</h3>
	<p>Your master controller is the default controller that is dispatched if you do not specify one in your URL.</p>
	<p>You can read more about controller dispatchment and master controllers <a href="controller.html">here</a>.</p>
	<pre><code class="ini">
system.masterController = home
	</pre></code>
	<p>Now by browsing to <span class="light">http://localhost/mysite/</span> you will be dispatching the Home controller on the Index method, both the default rules for the &lt;controller> and &lt;method> segments in the URL. This is exactly the same as going to <span class="light">http://localhost/mysite/home/index/</span></a></p>
</div>
<!--
	<div id="back-to-top-area">
		<div id="back-to-top"><a href="#">▲</a></div>
		<div id="hover-menu">
			<ul></ul>
		</div>
		<div class="clear"></div>
	</div>
	--->