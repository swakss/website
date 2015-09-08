<?php
	/**
	* 
	*/
	class PostsController extends AppController
	{
		public function index(){
			debug($this->request);
			debug($this->request->controller);
			die("Salut");
		}
	}