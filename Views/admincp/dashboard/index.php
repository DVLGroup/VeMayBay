<?php

	Session::init();
	$isAdmin = Session::get('Admin');
	if(!$isAdmin)
	{
		header('location:' . URL);
	} 
	
	echo 'Chao ban den voi trang Admin';