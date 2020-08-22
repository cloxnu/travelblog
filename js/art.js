function getQueryVariable(v) {
    const query = window.location.search.substring(1);
    const vars = query.split('&');
    for (let i = 0; i < vars.length; i++) {
        const pair = vars[i].split('=');
        if (pair[0] === v) {
            return pair[1];
        }
    }
    return false;
}

let art = getQueryVariable('art');
let cdn = function () {
    const v = getQueryVariable('cdn');
    if (v === 'false') {
        return false;
    } else {
        return true;
    }
}();

if (cdn) {
    document.getElementById("cdn-btn").classList.add("green");
    // document.getElementById("cdn-line").classList.add("bg-green");
    document.getElementById("cdn-point").classList.add("bg-green");
    // document.getElementById("cdn-div").classList.add("bg-green");
    document.getElementById("cdn-line").style.opacity = "0";
    document.getElementById("cdn-point").style.opacity = "1";
} else {
    document.getElementById("cdn-btn").classList.add("red");
    document.getElementById("cdn-line").classList.add("bg-red");
    // document.getElementById("cdn-div").classList.add("bg-red");
    document.getElementById("cdn-point").style.opacity = "0";
    document.getElementById("cdn-line").style.opacity = "1";
}

let blog_json;
let blog_title;
let blog_content;
let blog_cover;

if (art) {
    read_info(art, function (json) {
        blog_json = json;
        blog_title = blog_json["title"];
        blog_cover = content(art + "/" + blog_json["cover"]);
        if (cdn) {
            request(content(art + "/" + blog_json["content"]), function (content) {
                blog_content = content;
                load_page();
            });
        } else {
            read(art + "/" + blog_json["content"], function (content) {
                blog_content = content;
                load_page();
            });
        }
    }, function (e) {
        window.location.href = "404.php";
    });
}


function load_page() {
    const baseURL = function () {
        if (cdn) {
            return content(art) + "/";
        } else {
            return "content/" + art + "/";
        }
    }();

    let renderer = {
        html(html) {
            return html.replace("src=\"", `src=\"${baseURL}`);
        }
    };

    marked.use({ renderer });
    document.getElementById("content").innerHTML = marked(blog_content, {
        baseUrl: baseURL
    });

    document.getElementById("cover-img").style.opacity = "1";
    document.getElementById("cover-img").src = blog_cover;
    document.getElementById("title").innerText = blog_title;
    document.getElementById("class").innerText = blog_json["class"];

    document.getElementById("creation-date").innerText = blog_json["creation_date"];

    add_title_link();
    add_touch();

    loaded();
}
