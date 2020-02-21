// $(document).ready(function () {


(function ($) {
    $(".button-click").on("click", function (event) {
        event.preventDefault();

        $.ajax({
            method: "get",
            url: apiVars.rest_url + "wp/v2/posts?filter[posts_per_page]=1&filter[orderby]=rand",


            beforeSend: function (xhr) {
                xhr.setRequestHeader("X-WP-Nonce", apiVars.wpapi_nonce);
            }
        }).done(function (data) {
            // alert("Success! Comments are closed for this post.");
            const author = data[0].title.rendered
            const quote = data[0].content.rendered
            console.log(data)
            // ***** appending data ***///
            $(".entry-content").html(quote);
            $(".entry-content p").addClass('quote-text');
            $(".author-name-content").text(author);

        });
    });
    $(".button-submit").click(function (event) {

        event.preventDefault();
        const newQuote = {
            'title': $('#author-box').val(),
            'content': $('#message-box').val(),
            '_qod_quote_source': $('#quote-box').val(),
            '_qod_quote_source_url': $('#url-box').val(),
            'status': 'publish'
        };

        $.ajax({
            method: "POST",
            data: newQuote,
            context: document.body,
            url: apiVars.rest_url + "wp/v2/posts",
            beforeSend: function (xhr) {
                xhr.setRequestHeader("X-WP-Nonce", apiVars.wpapi_nonce);
            }

        }).done(function (data) {
            window.location.href = data.link;
        });
    });



})(jQuery);

// });

