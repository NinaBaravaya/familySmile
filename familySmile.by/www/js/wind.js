

$(function() {
    $("a[rel]").overlay(function() {
        var wrap = this.getContent().find("div.wrap");
        if (wrap.is(":empty")) {
            wrap.load(this.getTrigger().attr("href"));
        }
    });
});

