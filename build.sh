cp -r public/ dist/ \
  && php src/index.php > dist/index.html \
  && php src/404.php > dist/404.html \
  && php src/proposal-application.php > dist/proposal-application.html \
  && php src/exchange.php > dist/exchange.html