// $(document).ready(function () {


(function ($) {
    $(".button-click").on("click", function (event) {
        event.preventDefault();
        $.ajax({
            method: "get",
            url: apiVars.rest_url + "/wp/v2/posts?filter[posts_per_page]=1&filter[orderby]=rand",


            beforeSend: function (xhr) {
                xhr.setRequestHeader("X-WP-Nonce", apiVars.wpapi_nonce);
            }
        }).done(function (data) {
            console.log(data);
            // alert("Success! Comments are closed for this post.");
        });
    });
})(jQuery);

// });