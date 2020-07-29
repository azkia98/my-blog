npm run production

git add build_production && git commit -m "Build for deploy"

git add -f build_production && git commit -m "Build for deploy"

git subtree push --prefix build_production origin gh-pages

#  git push origin `git subtree split --prefix build_production  master`:gh-pages  --force