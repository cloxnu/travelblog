function generate_blogs_html(all_blog_json, current_classification) {
    let all_blog_html = "";
    let is_style2 = false;
    all_blog_json.forEach(function (ele, idx) {
        if (current_classification !== "all") {
            if (current_classification !== ele["class"])
                return ;
        }
        const cover_path = ele["cover"].length === 0 ? "" : content(ele["dir"] + "/" + ele["cover"]);
        is_style2 = !is_style2;
        all_blog_html += generate_blog_html(idx, is_style2 ? "cover-style-2" : "cover-style-3", cover_path, ele["creation_date"], ele["class"], ele["title"], ele["description"], `./?art=${ele["dir"]}`);
    });
    return all_blog_html;
}

function generate_blog_html(no, cover_style, cover, creation_date, classification, title, desc, link) {
    const cover_display = function () {
        if (cover.length === 0)
            return 'none';
        else
            return 'block';
    }();
    const classification_color = function () {
        if (classification === 'travel')
            return '--orange';
        else if (classification === 'life')
            return '--teal';
        else if (classification === 'inspiration')
            return '--indigo';
        else
            return '--foreground-color';
    }();
    return `
        <div id="blog-${no}-div" class="${cover_style} blog-class-${classification}" 
        style="--style2-h-in-w500: ${cover.length === 0 ? "50vh" : "100vh"}">
            <hr class="cover-hr">
            <a id="blog-${no}-cover-link" class="cover-image-link transition" href="${link}" style="display: ${cover_display}">
                <img src="${cover}" id="blog-${no}-cover" class="cover-image"/>
            </a>
            <div id="blog-${no}-text" class="cover-text">
                <span id="blog-${no}-class" class="cover-class" style="color: var(${classification_color})">${classification}</span>
                <a id="blog-${no}-title" href="${link}" class="cover-title transition">${title}</a>
                <span id="blog-${no}-date" class="cover-date">${creation_date}</span>
                <a id="blog-${no}-desc" href="${link}" class="cover-desc transition">${desc}</a>
                <a id="blog-${no}-link" href="${link}" class="cover-link transition">EXPLORE
                    <img src="${home("arrow_right")}" id="blog-${no}-link-img" class="cover-link-img"/>
                </a>
            </div>
            <a id="blog-${no}-whole-link" class="cover-whole-link transition" href="${link}"></a>
        </div>`;
}