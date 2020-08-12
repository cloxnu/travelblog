function readall(successCallback) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "read", true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            successCallback(JSON.parse(xmlhttp.responseText));
        }
    }
}

function read(path, successCallback) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "read/?path=" + path, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            successCallback(JSON.parse(xmlhttp.responseText));
        }
    }
}

function readinfo(path="", successCallback) {
    const xmlhttp = new XMLHttpRequest();
    if (path.length === 0)
        xmlhttp.open("GET", "read/info/", true);
    else
        xmlhttp.open("GET", "read/info/?path=" + path, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            successCallback(JSON.parse(xmlhttp.responseText));
        }
    }
}
