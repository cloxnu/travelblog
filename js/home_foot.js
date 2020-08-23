let info;
let all_blog_json;

read_info("",function (json) {
    info = json;
    load_top();
})

read_all(function (json) {
    all_blog_json = json;
})

function load_top() {
    console.log(info.top);
    if (info.top.length === 0)
        return ;
    read_info(info.top, function (top_info) {
        console.log(top_info);
        const dir = content(top_info.dir) + "/";
        document.getElementById("top-cover").src = dir + top_info["cover"];
        document.getElementById("top-date").innerText = top_info["creation_date"];
        document.getElementById("top-class").innerText = top_info["class"];
        document.getElementById("top-title").innerText = top_info["title"];
        document.getElementById("top-title").href = `./?art=${top_info.dir}`;
        document.getElementById("top-desc").innerText = top_info["description"];
        document.getElementById("top-desc").href = `./?art=${top_info.dir}`;
        document.getElementById("top-link").href = `./?art=${top_info.dir}`;

        document.getElementById("top-div").style.display = "block";
    })
}

