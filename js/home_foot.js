let info;
let all_blog_json;

readinfo("",function (json) {
    info = json;
    load_top();
})

readall(function (json) {
    all_blog_json = json;
})

function load_top() {
    console.log(info.top);
    if (info.top.length === 0)
        return ;
    readinfo(info.top, function (top_info) {
        console.log(top_info);
        const dir = content(top_info.dir);
        document.getElementById("top-cover").src = dir + top_info["cover"];
        document.getElementById("top-title").innerText = top_info["title"];
        document.getElementById("top-desc").innerText = top_info["description"];

        document.getElementById("top-div").style.display = "block";
    })
}

