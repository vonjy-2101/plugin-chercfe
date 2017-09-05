(function($) {
    $(document).ready(function() {
        var $imgForm    = $('.form-update');

            $imgForm.on('submit', function(e) {
                e.preventDefault();

                var data = $(this).serialize();

                $.post( su_config.ajax_url, data, function(resp) {
                    if(resp == 0){
                        window.location.reload();
                    }
                });
            });

    });
}) (jQuery);
