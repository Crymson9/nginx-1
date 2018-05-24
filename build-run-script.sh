echo "A honlap cime:"
read webtitle
echo "A html-be irando:"
read content
echo -e "<html>\n" \
"<head>$webtitle</head>\n" \
"<body>\n" \
$content"\n" \
"</body>\n" \
"</html>" > ./web/index.html

echo "A build neve:"
read buildname
sudo docker build -t $buildname  .
echo "A container neve:"
read contname
sudo docker run --name $contname -d -p 80:80 $buildname
