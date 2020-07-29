npm run production

git add build_production && git commit -m "Build for deploy"

git add -f build_production && git commit -m "Build for deploy"

git subtree push -f --prefix build_production origin gh-pages