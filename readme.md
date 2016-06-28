
1. composer require laravelcollective/html
	config/app.php
		providers
			Collective\Html\HtmlServiceProvider::class,
	 	aliases	       
	        'HTML' => Collective\Html\HtmlFacade::class,
	        'Form'=> Collective\Html\FormFacade::class,
2. Elixir
	command: npm install
	Manual	        
		copy bootstrap files to public/assets
		edit file gulpfile.js
		comand gulp 
