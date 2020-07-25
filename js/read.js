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
            successCallback(xmlhttp.responseText);
        }
    }
}
