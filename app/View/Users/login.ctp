<?php 
	if (isset($connexion)){
		if ($connexion)
			echo "vous etes connecter";
		else
			echo "erreur de mot de passe";
	}
	if (empty($this->Session->read('Auth.User.id'))){
			<div name="container-inscription" class="container">
				<div name="jumbotron-inscription" class="jumbotron">
					<form name="form-inscription" class="form-signin">
						<h2 name="titre-inscription" class="form-signin-heading">Connexion</h2>
						<label class="sr-only">Email address</label>
						<input id="inputEmail" class="form-control" type="email" autofocus="" required="" placeholder="Identifiant">
						<label class="sr-only" for="inputPassword">Password</label>
						<input id="inputPassword" class="form-control" type="password" required="" placeholder="Mot de passe">
						<div name="checkbox-inscription" class="checkbox">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
						</div>
					</form>
				</div>
			</div>	
		echo $this->Form->create('User'); 
			echo $this->Form->input('username', array('label' => 'identifiant'));
			echo $this->Form->input('password', array('label' => 'Mot de passe')); 
		echo $this->Form->end('Se connecter');
	}
	else 
		echo "Vous etes déjà connecter"; 
?>