<?

if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
	// exec
	exec('git pull');
}
