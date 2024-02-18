npm run build \
  && cp -r public/ dist/ \
  && php src/php/index.php > dist/index.html \
  && php src/php/404.php > dist/404.html \
  && php src/php/token.php > dist/token.html \
  && php src/php/about.php > dist/about.html \
  && php src/php/contact.php > dist/contact.html \
  && php src/php/how-to-buy.php > dist/how-to-buy.html \
  && php src/php/success.php > dist/success.html \
  && php src/php/blog.php > dist/blog.html