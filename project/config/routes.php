<?php

use \Core\Route;

return [
	new Route('/cpanel/edit-news/:id/', 'admin', 'editNewsItem'),
	new Route('/cpanel/', 'admin', 'index'),
	new Route('/logout/', 'user', 'logout'),
	new Route('/auth/', 'user', 'auth'),
	new Route('/register/', 'user', 'register'),
];
