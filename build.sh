cp -r public/ dist/ \
  && php src/index.php > dist/index.html \
  && php src/whitelist.php > dist/whitelist.html
  && php src/exchange.php > dist/exchange.html