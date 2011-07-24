<div class="content-box">
	<h1>Using the Cache</h1>
	<h1 id="anchor-introduction">Introduction</h1>
	<p>PPI_Cache lets you abstract the cache driver from your PPI application's configuration file. The default driver if you don't specify one is 'disk' aka PPI_Cache_Disk.</p>
	<br>
	<p>This is useful so that in future if you are in a different environment and wish to change driver from disk to memcached or to redis or to APC, then you can easily do that by setting either of the following in your configuration file.</p>
	<pre><code class="php">
cache.hander = redis
cache.hander = apc
cache.hander = memcache
cache.hander = memcached
	</code></pre>

	<p>Memcache and memcached have been aliased to one another, so if you type memcache, and it's not available but memcached is available it will use that, and vice versa.</p>
</div>
<div class="content-box">
	<h1 id="anchor-accessing-the-cache">Accessing The Cache</h1>
	<p>To access the cache from your PPI application, from within a Model or a Controller you can easily call</p>
	<pre><code class="php">
$cache = $this->getCache();
	</code></pre>
	<p>If you're inside your own created class then you can access the same object by doing:</p>
	<pre><code class="php">
$cache = PPI_Helper::getCache();
	</code></pre>
	<p>There are many ways in which to use the PPI_Cache layer for ease of use. Some examples are detailed below.</p>
	<br>
	<p>If you want to take the default configuration from the your PPI appliction's configuration file. Then no special parameters are needed.</p>
	<pre><code class="php">
$cache = $this->getCache();
	</code></pre>
	<p>If you want to specify the cache driver to use, then you can easily pass the name of that through by doing this:</p>
	<pre><code class="php">
$cache = $this->getCache('apc');
// or
$cache = $this->getCache('redis');
// or
$cache = $this->getCache('memcached');
	</code></pre>

	<br>
	<p>If you wish to only use the cache object once, chaining is a popular technique</p>
	<pre><code class="php">
$this->getCache()->set('foo', $bar);
	</code></pre>

</div>
<div class="content-box">
	<h1 id="anchor-setting-cache-data">Setting cache data</h1>
	<pre><code class="php">
$this->getCache()->set('foo', $bar, $ttl);
	</code></pre>
</div>
<div class="content-box">
	<h1 id="anchor-getting-cache-data">Getting cache data</h1>
	<pre><code class="php">
$bar = $this->getCache()->get('foo');
	</code></pre>
</div>
<div class="content-box">
	<h1 id="anchor-checking-if-data-exists">Checking if data exists</h1>
	<pre><code class="php">
$bar = $this->getCache()->exists('foo');
	</code></pre>
</div>
<div class="content-box">
	<h1 id="anchor-removing-data">Removing data</h1>
	<pre><code class="php">
$bar = $this->getCache()->remove('foo');
	</code></pre>
</div>