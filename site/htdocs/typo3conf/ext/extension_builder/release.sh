#!/usr/bin/env bash

VERSION="10.0.1"

git checkout master
git pull origin master

tailor set-version ${VERSION}

git commit -am "[RELEASE] Release v${VERSION}"

git tag v${VERSION}

git push origin master
git push origin --tags
