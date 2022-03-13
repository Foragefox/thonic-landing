cp -r public/ dist/ \
  && php src/index.php > dist/index.html \
  && php src/success.php > dist/success.html