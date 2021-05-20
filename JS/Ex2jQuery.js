$("#values-btn").click(function() {
    const a = $("a");
    const id = a.attr("id");
    const type = a.attr("type");
    const hreflang = a.attr("hreflang");
    const rel = a.attr("rel");
    const target = a.attr("target");
    const href = a.attr("href");

    console.log(id, type, hreflang, rel, target, href);
})