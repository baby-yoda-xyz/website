<!DOCTYPE html>
<html>
  <head>
 <!-- Primary Meta Tags -->
<title>YodaHost - Another free & decent image host</title>
<meta name="title" content="YodaHost - Another free & decent image host">
<meta name="description" content="Yeah, there's another one so what?">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://baby-yoda.xyz">
<meta property="og:title" content="YodaHost - Another free & decent image host">
<meta property="og:description" content="Yeah, there's another one so what?">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://baby-yoda.xyz">
<meta property="twitter:title" content="YodaHost - Another free & decent image host">
<meta property="twitter:description" content="Yeah, there's another one so what?">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/4.0.0/github-markdown.min.css">
<style>
	.markdown-body {
		box-sizing: border-box;
		min-width: 200px;
		max-width: 980px;
		margin: 0 auto;
		padding: 45px;
	}

	@media (max-width: 767px) {
		.markdown-body {
			padding: 15px;
		}
	}
</style>
  </head>
  <body>
  <article class="markdown-body">
  <h1>YodaHost</h1>
	  <p>A decent yet free* image hosting for <span id="examples"></span>. In closed beta. Apply in <a href="https://discord.gg/windows">our Discord server.</a></p>
	  <h3>Stats</h3>
	  <ul>
		  <li><b><?php str_replace(system("du -sh"), " ./images", ""); ?></b> diskspaced used</li>
		  <li><b><?php sizeof(scandir("./images/")); ?></b> files stored</li>
	  </ul>
</article>
    <footer>
      <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
      <script>
new Typewriter('#everything', {
  strings: ['Discord', 'Guilded', 'Hiven', 'Twitter', 'Facebook', 'Tumblr', 'YouTube', 'Whatsapp', 'Messenger', 'Instagram', 'TikTok', 'Reddit', 'LinkedIn', 'Snapchat', 'Pintrest', 'Telegram', 'Medium', 'Signal'],
  autoStart: true,
});
      </script>
    </footer>
  </body>
</html>