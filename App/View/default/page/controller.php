<div class="content-box">
	<h1>Using Controllers</h1>
	<h1 id="anchor-introduction">Introduction</h1>
	<p>Controllers are simply classes that are named in a way that they can be associated with a URI.</p>
	<p>They are in charge of controlling flow and contain the bussiness logic for your application. They retrieve information via various methods such as from the database using Models. They then pass that information onto the presentation layer (A View) to be displayed.</p>
	<br>
	<p>The following documentation will outline the various ways in which you can interact with PPI's controller layer.</p>
</div>

<div class="content-box">
	<h1 id="anchor-making-your-controller">Making your controller</h1>
	<pre><code class="php">
// File: App/Controller/Home.php
class APP_Controller_Home extends APP_Controller_Application {

	function index() {
		echo 'Hello world';
	}

}
	</code></pre>
</div>

<div class="content-box">
	<h1 id="anchor-accessing-your-controller">Accessing your controller</h1>
	<p>As mentioned in the introduction, we associate a URI with a contoller. This is how we do it.</p>
	<pre><code>
http://hostname/controller/method
	</code></pre>
	<p>The part "controller" matches the last segment of your class name. The part "method" is the method that is called on your controller. If you do not specify a method in your URI then the default method called is "index".</p>
	<p>Consider the following:</p>
	<pre><code class="php">
// File: App/Controller/User.php
class APP_Controller_User extends APP_Controller_Application {

	function index() {
		echo 'Hello Index';
	}

	function profile() {
		echo 'Hello Profile';
	}

}
	</code></pre>

	<p>To get the output of "Hello Index" your URL would be:</p>
	<pre><code class="">
http://localhost/myapp/user (defaults to method 'index')
http://localhost/myapp/user/index
	</code></pre>

	<p>To get the output of "Hello Profile" your URL would be:</p>
	<pre><code>
http://localhost/myapp/user/profile
	</code></pre>
</div>

<div class="content-box">
	<h1 id="anchor-controllers-with-arguments">Controllers with arguments</h1>
	<p>To pass arguments aka "parameters" you can send the via the URI. Here is an example:</p>
	<pre><code>
http://localhost/myapp/user/profile/23
	</code></pre>

	<p>To obtain the ID from the URI we can use the get() method.</p>
	<pre><code class="php">
class APP_Controller_User extends APP_Controller_Application {

	// Url: http://localhost/myapp/user/profile/23
	function profile() {
		$userID = $this->get('profile', 0);
	}

}
	</pre></code>

</div>

<div class="content-box">
	<h1 id="anchor-loading-a-view">Loading a view</h1>
	<p>We use the load() method to load up a view file, for the homepage, from your application's view folder.</p>
	<pre><code class="php">
class APP_Controller_Home extends APP_Controller_Application {

	// Url: http://localhost/myapp/
	function index() {
		$this->load('home/index');
	}
}
	</code></pre>

</div>

<div class="content-box">
	<h1 id="anchor-loading-an-ajax-view">Loading an Ajax View</h1>
	<p>Imagine you're making a twitter-like application where on a user's profile you can click "See John's Followers" and you want to get them via ajax.</p>
	<p>The following is an example of loading an ajax view being loaded with the $isAjax variable set to true.</p>

	<pre><code class="php">
class APP_Controller_User extends APP_Controller_Application {

	// Url: http://localhost/myapp/user/ajax_followers/userid/13
	function ajax_followers() {
		$isAjax    = true;
		$userID    = $this->get('userid');
		$followers = $this->getFollowers($userID);
		$this->load('user/ajax_followers', compact('isAjax', 'followers'));
	}
}

	</code></pre>
</div>

<div class="content-box">
	<h1 id="anchor-handling-forms">Handling Forms</h1>
	<p>You can submit forms to controller methods and obtain the POST information using the post() method. Here we display a create user page and also handle the form submit in the create() method.</p>
	<pre><code class="php">
class APP_Controller_User extends APP_Controller_Application {


	// Url: http://localhost/myapp/user/create
	function create() {

		// Has the form been submitted ?
		if($this->isPost()) {
			$userModel = new APP_Model_User();
			$userInfo  = $this->post();
			$userModel->insert($userInfo);
			$this->load('user/createsuccess');
			return;
		}

		$this->load('user/create');
	}

}
	</code></pre>

</div>

<div class="content-box">
	<h1 id="anchor-passing-data-to-a-view">Passing data to a view</h1>
	<p>Passing data to a view is very simple. Below is an example where we take an argument using get(). Load up a model, get the user's information and pass that to the view for rendering.</p>

	<pre><code class="php">
class APP_Controller_User extends APP_Controller_Application {

	// Url: http://localhost/myapp/user/profile/23
	function profile() {
		$userID    = $this->get('profile', 0);
		$userModel = new APP_Model_User();
		$user      = $userModel->find($userID);
		$this->load('user/profile', compact('user'));
	}

}
	</code></pre>

<pre><code class="php">
class APP_Controller_User extends APP_Controller_Application {

	// Url: http://localhost/myapp/user/profile/23/usecompact/yes
	function profile() {

		$userID     = $this->get('profile', 0);
		$useCompact = $this->get('usecompact', 'yes');

		// The following load() calls are exactly the same thing.
		if($useCompact === 'yes') {
			$this->load('user/profile', compact('userid'));
		} else {
			$this->load('user/profile', array('userid' => $userID));
		}
	}

}
	</code></pre>

</div>

<div class="content-box">

	<h1 id="anchor-defining-the-master-controller">Defining the master controller</h1>
	<p>The master controller aka the "default controller" is maintained from your PPI application's config file. A master controller is needed so that when you access the root of your website there will still be a controller dispatched. Here is an example:</p>
	<pre><code class="ini">
// File: App/Config/general.ini
system.masterController = home
	</code></pre>
	<p>The following will access the exact same code in the Home controller on the index() method.</p>
	<pre><code>
http://localhost/myapp
http://localhost/myapp/home
http://localhost/myapp/home/index
	</code></pre>
</div>