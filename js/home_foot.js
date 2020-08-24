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

function load_blogs() {
    const blog_html = function (no, cover, creation_date, classification, title, desc, link) {
        return `
        <div id="blog-${no}-div" class="cover-style-2">
            <a id="blog-${no}-cover-link" class="cover-image-link transition" href="${link}">
                <img src="${cover}" id="blog-${no}-cover" class="cover-image"/>
            </a>
            <div id="blog-${no}-text" class="cover-text">
                <span id="blog-${no}-class" class="cover-class">${classification}</span>
                <a id="blog-${no}-title" href="${link}" class="cover-title transition">${title}</a>
                <span id="blog-${no}-date" class="cover-date">${creation_date}</span>
                <a id="blog-${no}-desc" href="${link}" class="cover-desc transition">${desc}</a>
                <a id="blog-${no}-link" href="${link}" class="cover-link transition">EXPLORE
                    <img src="${home("arrow_right")}" id="blog-${no}-link-img" class="cover-link-img"/>
                </a>
            </div>
            <a id="blog-${no}-whole-link" class="cover-whole-link transition" href="${link}"></a>
        </div>`;
    };

    let all_blog_html = "";
    all_blog_json.forEach(function (ele, idx) {
        all_blog_html += blog_html(idx, content(ele["dir"] + "/" + ele["cover"]), ele["creation_date"], ele["class"], ele["title"], ele["description"], `./?art=${ele["dir"]}`);
    });

    document.getElementById("blog-div").innerHTML = all_blog_html;
    document.getElementById("blog-div").style.display = "block";

    add_transition_animation();
}


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

