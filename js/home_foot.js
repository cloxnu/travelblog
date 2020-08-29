let info;
let all_blog_json;

read_info("",function (json) {
    info = json;
    load_top();
    load_once(load_item.top);
})

read_all(function (json) {
    all_blog_json = json;
    load_blogs();
    load_once(load_item.blogs);
})

function load_top() {
    if (info.top.length === 0)
        return ;
    read_info(info.top, function (top_info) {
        const dir = content(top_info.dir) + "/";
        document.getElementById("top-cover").src = dir + top_info["cover"];
        document.getElementById("top-date").innerText = top_info["story_date"];
        document.getElementById("top-class").innerText = top_info["class"];
        document.getElementById("top-title").innerText = top_info["title"];
        document.getElementById("top-title").href = `./?art=${top_info.dir}`;
        document.getElementById("top-desc").innerText = top_info["description"];
        document.getElementById("top-desc").href = `./?art=${top_info.dir}`;
        document.getElementById("top-link").href = `./?art=${top_info.dir}`;

        document.getElementById("top-div").style.display = "block";
    })
}

function load_blogs() {
    document.getElementById("blog-div").innerHTML = generate_blogs_html(all_blog_json, current_classification);
    document.getElementById("blog-div").style.display = "block";

    add_transition_animation();
}


const classification_items = {
    all: "all",
    travel: "travel",
    life: "life",
    inspiration: "inspiration"
};
let current_classification = classification_items.all;

function class_btn_clicked(name) {
    if (name === current_classification)
        return ;
    for (let ele of document.getElementsByClassName("class-btn")) {
        ele.classList.remove("active");
    }
    document.getElementById(`class-btn-${name}`).classList.add("active");
    current_classification = name;

    load_blogs();
}


// load

let has_loaded = {
    top: false,
    blogs: false,
    page: false
}
const load_item = {
    top: 'top',
    blogs: 'blogs',
    page: 'page'
}
function load_once (which) {
    has_loaded[which] = true;

    if (Object.values(has_loaded).every(Boolean)) {
        loaded();
    }
}

window.onload = function () {
    load_once(load_item.page);
}

