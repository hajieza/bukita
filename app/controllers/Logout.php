<?php

class Logout
{
	public function index()
	{
		session_start();             // Mulai session
		session_destroy();           // Hancurkan session
		header('Location: ' . base_url . '/login'); // Redirect ke login
		exit;                        // Hentikan eksekusi
	}
}
