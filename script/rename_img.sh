if [ $# -lt 2 ]
then
    echo "The count of parameters are less than 2."
    echo "rename_img.sh [dir] [md]."
    exit 1
fi

#grep "(" "$2";
#grep -E "(?<=\!\[.*\])\(.*\)" "$2";

#img_line=$(grep -E "\!\[.*\]\(.*\)" "$2");
#
#echo "$img_line";

change_file_name() {
    new_rev=$(echo "$2" | rev)
    echo "$1" | rev | sed "s/\.[^/]*\//.$new_rev\//" | rev
}

i=1;

for img in $1
do
    echo "$img"
    new_file=$(change_file_name "$img" "$i")
#    mv "$img" "$new_file"
    sed -i '' "/\!\[.*\]($img)/s/($img)/($new_file))/g" "$2"
    i=`expr $i + 1`
done

