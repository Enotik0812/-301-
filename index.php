#Для фикса всяких редиректов типа domen.ru/index.php  domen.ru//// все станут domen.ru

# Убираем знак вопроса в конце URL (/?)
	RewriteCond %{THE_REQUEST} ^[^\s]+\s+[^?]*?\?
	RewriteCond %{QUERY_STRING} ^$
	RewriteRule .? %{REQUEST_URI}? [R=301,L]


	# Убираем слеши
	RewriteBase /
	RewriteCond %{HTTP_HOST} !=""
	RewriteCond %{THE_REQUEST} ^[A-Z]+\s/{2,}+(.*)\sHTTP/[0-9.]+$ [OR]
	RewriteCond %{THE_REQUEST} ^[A-Z]+\s(.*)/{2,}+\sHTTP/[0-9.]+$
	RewriteRule .* https://%{HTTP_HOST}%1 [R=301,L]
