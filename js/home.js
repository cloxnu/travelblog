let all_blog_json;

readall(function (json) {
    all_blog_json = json;
})

window.addEventListener('scroll', function (e) {
    const screen_height = document.documentElement.clientHeight;
    const welcome_offset = -document.getElementById("welcome").getBoundingClientRect().top;
    const welcome_offset_ratio = welcome_offset / screen_height;
    document.getElementById("welcome-p1").style.opacity =
        (welcome_offset_ratio < 0.3 ? '1' :
            (welcome_offset_ratio > 0.6 ? '0' : (
                (-welcome_offset_ratio + 0.6).toString()
            ))); // 1 --- 1 / 0.3 --- 0
    document.getElementById("welcome-p1").style.bottom =
        (welcome_offset_ratio < -1 ? '73' :
            (welcome_offset_ratio > 0.6 ? '57' : (
                (-10 * welcome_offset_ratio + 63).toString()
            ))) + '%'; // 73 --- 57
    document.getElementById("welcome-p2").style.opacity =
        (welcome_offset_ratio < 0 ? '0' :
            (welcome_offset_ratio > 0.3 ? '1' : (
                (welcome_offset_ratio).toString()
            ))); // 0 --- 0.3 / 1 --- 1
    document.getElementById("welcome-p2").style.top =
        (welcome_offset_ratio < 0 ? '57' :
            (welcome_offset_ratio > 1.6 ? '73' : (
                (10 * welcome_offset_ratio + 57).toString()
            ))) + '%'; // 57 --- 73
});

