<!DOCTYPE html>
<html lang="zh-cn" dir="ltr">
	<head>
		<title><?php echo CHtml::encode(Yii::app()->name); ?></title>
		<meta charset="utf-8">
		<meta name="description" content="<?php echo $head['title']?>" />
		<meta name="robots" content="<?php echo $head['robots']?>" />
		<meta name="Author" Content="<?php echo $head['author']?>">
		<meta name="keywords" Content="<?php echo $head['keywords']?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script src="/static/javascript/html5shiv.js"></script>
		<script src="/static/javascript/brn3cne.js"></script>
		<script src="/static/javascript/jquery.js"></script>
		<script src="/static/javascript/jquery.ui.js"></script>
		<script src="/static/javascript/jquery.flexslider-min.js"></script>
		<script src="/static/javascript/slider.js"></script>
		<script src="/static/javascript/retina.js"></script>
		<script src="/static/javascript/main.js"></script>
		<link rel="alternate" type="application/rss+xml" href="<?php echo $head['alternate']['href']?>" title="<?php echo $head['alternate']['title']?>" />
		<link rel="apple-touch-icon" href="/static/images/apple-touch-icon-precomposed.png"/>
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
	    <link rel="stylesheet" href="/static/css/html.css" />
	    <link rel="stylesheet" href="/static/css/js.css" />
		<link rel="stylesheet" href="/static/css/main.css" />
		<link rel="stylesheet" href="/static/css/flexslider.css" />
	</head>
	<body class="home">
		<header class="site">
			<nav class="group">
				<div class="logo">
					<a class="active" href="/">
						<img src = "{$data.body.logo}" alt = "{$data.head.description}"/>Startseite
					</a>
				</div>	
				<a class="togglenav" href="#nav">hello</a>
				<ul id="nav">
					<li><a href="/about">About</a></li>
					<li><a href="/life">Life</a></li>
					<li><a href="/album">Album</a></li>
					<li><a href="/jobs">Jobs</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="/blog">Blog</a></li>
				</ul>
			</nav>	
		</header>
		<section class="con">
			<article class="group">
				<div>
					<h1>Köpfe zu Pflugscharen!</h1>
					<p>Strategie, Kreation, Umsetzung – für Ihre digitale Kommunikation.</p>
					<a href="/arbeit" class="button looking-closer">Looking closer <span class="icon-arrow-right"></span></a>
				</div>
				<img src="/static/images/pflugschar.jpg" alt="Abbildungs eines Pflugschars" />
			</article>
		</section>
		<div id="showroom">
			<span class="close"><a href="#c">Hoch damit</a></span>
			<div id="stage">
				<div class="overflow">
					<ul class="group">
						<li class="cebit">
							<div class="desc">
								<hgroup>
									<h3>CeBIT 2013</h3>
									<h2>Mobile Website</h2>
								</hgroup>
								<p>Als Lead-Agentur der Deutschen Messe haben wir dieses Jahr die mobile Variante der Cebit-Website unter cebit.de konzipiert, gestaltet und umgesetzt. Natürlich responsive und mit Blick auf Besucher und Devices aus über 120 Nationen.</p>

								<div class="link">
									<p class="note">Jetzt mit Aftershow-Report</p>
									<a href="http://www.cebit.de/cebit2go/" title="">cebit.de</a>
								</div>
							</div>
							<div class="key-visual">
								<img src="/static/images/cebit_hand.png" alt="">
								<!--<p class="badge">Lorem ipsum dolor amet</p>-->
							</div>
						</li>
						<li class="ste">
							<div class="desc">
								<hgroup>
									<h3>Stiebel Eltron</h3>
									<h2>Mobile first</h2>
								</hgroup>
								<p>Stiebel Eltrons App-Welt wächst rasant. Und wir sorgen mit unserem Javascript-Framework dafür, dass derselbe Code für Desktop-Version, Web App und Android- oder iOS-Variante genutzt wird. </p>
								<div class="link">
									<p class="note">Bald auch für Android!</p>
									<a href="https://itunes.apple.com/de/artist/stiebel-eltron-gmbh-co-kg/id452242718" title="">Available on the App Store</a>
								</div>
							</div>
							<div class="key-visual">
								<img src="/static/images/ste_devices.png" alt="">
							</div>
						</li>
						<li class="vhv">
							<div class="desc">
								<hgroup>
									<h3>VHV Versicherungen</h3>
									<h2>Partner-Extranet</h2>
								</hgroup>
								<p>Der Makler-Versicherer Nr. 1 braucht eine starke Plattform für seine über 30.000 Partner. Und diese können nun personalisiert auf das neue Portal zugreifen - mit integriertem Shop-System, Web2Print-Modul und SAP-Anbindung. Alles auf Basis des Enterprise CMS Magnolia.</p>

								<div class="link">
									<a href="http://vhv-partner.de" title="">www.vhv-partner.de</a>
								</div>
							</div>
							<div class="key-visual">
								<img src="/static/images/vhv_imac.png" alt="">
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="pointer">
				<span></span>
			</div>
			<ul id="controls" class="group">
				<li>
					<!--img src="/content/home/sr_justlaunched.png" width="109" height="47" alt="Just Launched" class="jl"-->
					<a href="#1" class="left">
						<img src="/static/images/cebit_logo.png" class="logo" alt="">
						<div class="visual">
							<img src="/static/images/cebit_hand_small.png" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#2" class="middle">
						<img src="/static/images/ste_logo.jpg" class="logo" alt="">
						<div class="visual">
							<img src="/static/images/ste_device_tablet.png" class="tablet" alt="">
							<img src="/static/images/ste_device_phone.png" class="phone" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#3" class="right">
						<img src="/static/images/vhv_logo.png" class="logo" alt="">
						<div class="visual">
							<img src="/static/images/dieter.png" alt="">
						</div>
					</a>
				</li>
			</ul>
		</div>
		<footer class="page">
			<section class="group">
				<article>
					<h2>Zu tun</h2>
					<p>gibt es bei uns mehr als genug. Daher suchen wir aktuell mehr als nur einen neuen Kopf. Alle <a href="http://www.neoskop.de/jobs">Stellenangebote</a></p>
				</article>
				<article>
					<h2>Neoskop</h2>
					<p>ist eine Agentur für digitale Kommunikation mit Sitz in Hannover. Ja, auch wir haben ein <a href="http://www.neoskop.de/impressum">Impressum</a>.</p>
				</article>
				<article>
					<h2>Twitter</h2>
					<p>Stehen wir als Gründungsmitglied natürlich voll dahinter: <a href="http://creative-coder.net">http://creative-coder.net</a> <a href="http://twitter.com/#search/%23creativecoder">#creativecoder</a> <a href="http://twitter.com/#search/%23hannover">#hannover</a> <a href="http://twitter.com/#search/%23trainee">#trainee</a></p>				<a href="https://plus.google.com/113306635222231449314" rel="publisher" style="visibility:hidden;">Google+</a>
				</article>
			</section>
		</footer>
	</body>
</html>