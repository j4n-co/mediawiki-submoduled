find -L ../w/extensions/  -type l -exec rm '{}' \;
find -L ../w/skins/  -type l -exec rm '{}' \;

find ../w-dependencies/extensions -maxdepth 1 -mindepth 1 -type d -exec ln -s ../'{}' ../w/extensions \;
find ../w-dependencies/skins -maxdepth 1 -mindepth 1 -type d -exec ln -s ../'{}' ../w/skins \;
