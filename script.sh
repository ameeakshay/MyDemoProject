
read -p "Enter the filename to blame:" fileName 


echo $fileName
sfil=`find . -type f -name "$fileName"`
echo $sfil
git gui blame $sfil 


