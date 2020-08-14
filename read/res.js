let prefix;
let home;
let font;
let content;

const file = new XMLHttpRequest();
file.open("GET", "read/res.json", false);
file.onreadystatechange = function ()
{
    if (file.readyState === 4 && file.status === 200)
    {
        let json = JSON.parse(file.responseText);
        prefix = json["prefix"];
        home = function (name) {
            return prefix + json["home"][name];
        };
        font = function (name) {
            return prefix + json["font"][name];
        };
        content = function (name) {
            return prefix + json["content"] + name + "/";
        }
    }
}
file.send();

