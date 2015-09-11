<?php
	if (isset($connexion)){
		if ($connexion)
			echo "vous etes connecter";
		else
			echo "erreur de mot de passe";
	}
	if (empty($this->Session->read('Auth.User.id'))){
		
			echo '<div name="container-inscription" class="container">';
				echo '<div name="jumbotron-inscription" class="jumbotron">';
			// 		<form name="form-inscription" class="form-signin">
				echo '<h2 name="titre-inscription" class="form-signin-heading">Connexion</h2>';
						
			// 			<input id="inputEmail" class="form-control" type="email" autofocus="" required="" placeholder="Identifiant">
			// 			<input id="inputPassword" class="form-control" type="password" required="" placeholder="Mot de passe">
			// 			<div name="checkbox-inscription" class="checkbox">
			// 				<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
			// 			</div>
			// 		</form>
			// 	</div>
			// </div>
				echo $this->Form->create('User'); 
				echo $this->Form->input('username', array('label' => false,
															'class' => 'form-control',
															'id' => 'inputEmail',
															'placeholder' => "Identifiant",
															'autofocus' => true,
															'required' => true
															));
				echo $this->Form->input('password', array('label' => false,
															'class' => 'form-control',
															'id' => 'inputPassword',
															'type' => 'password',
															'placeholder' => "Mot de passe",
															'autofocus' => false,
															'required' => true
															));
				// echo '<div name="checkbox-inscription" class="checkbox">';
				$options = array('class' => 'btn btn-lg btn-primary btn-block',
									'div' => array('class' => 'checkbox"',
													'name' => 'checkbox-inscription'));
				echo $this->Form->end($options);
					// echo '<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>'
				// echo '</div>';
			echo "</div>";
		echo "</div>";	
	}
	else 
		echo "Vous etes déjà connecter"; 
?>