find ../extensions -maxdepth 1 -mindepth 1 -type d -exec ln -s ../'{}' ../mediawiki/extensions \;
find ../skins -maxdepth 1 -mindepth 1 -type d -exec ln -s ../'{}' ../mediawiki/skins \;
