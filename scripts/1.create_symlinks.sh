# remove existing symlinks (if they exists)
find -L ../w/extensions/  -type l -exec rm '{}' \;
find -L ../w/skins/  -type l -exec rm '{}' \;

# Create symlinks from extensions and skins into the mw-core extensions & skins folder
find ../w-dependencies/extensions -maxdepth 1 -mindepth 1 -type d -exec ln -s ../'{}' ../w/extensions \;
find ../w-dependencies/skins -maxdepth 1 -mindepth 1 -type d -exec ln -s ../'{}' ../w/skins \;

# Create symlinks from the mw-core folder into the w-dependencies folder so the extension update
# scripts and installation scripts works
rm ../w-dependencies/resources
rm ../w-dependencies/maintenance
ln -s ../w/resources ../w-dependencies/resources
ln -s ../w/maintenance ../w-dependencies/resources
