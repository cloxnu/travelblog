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
let all_blog_json;
let blog_path;

readall(function (json) {
    all_blog_json = json;
    let blog = all_blog_json.filter(function (blog) {
        return blog.id === art;
    })
    if (blog.length) {
        blog_path = blog[0].dir + "/" + blog[0].content;
        read(blog_path, function (content) {
            document.getElementById('content').innerHTML = marked(content);
        })
    }
})
