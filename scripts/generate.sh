# !/bin/bash

# all paths relative to this file's path
cd "$(dirname "$0")"

# go to the root of the project
cd ../generator
node index.js > chains.json
php index.php > ../dist/index.php

echo "Generated chains.json and index.php"
