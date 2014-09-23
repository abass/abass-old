$(function() {
    // Setup any needed variables.
    var $form   = $('#contact-form'),
        $loader = '<div class="loading"></div>';

    $form.append('<div id="response" class="hidden">');
    var $response = $('#response');

    // Do what we need to when form is submitted.
    $form.on('click', 'input[type=submit]', function(e){

        // Hide any previous response text and show loader
        $response.hide().html( $loader ).show();

        // Make AJAX request
        $.post('resources/script/contact-send', $form.serialize(), function( data ) {
        // $.post('/resources/script/contact-send.php', $form.serialize(), function( data ) {

            // Show response message
            $response.html( data );

            // Scroll to bottom of the form to show respond message
            var bottomPosition = $form.offset().top + $form.outerHeight() - $(window).height();

            if( $(document).scrollTop() < bottomPosition )
                $('html, body').animate({ scrollTop : bottomPosition });

            // If form has been sent succesfully, clear it
            if( data.indexOf('success') !== -1 )
                $form.find('input:not(input[type="submit"], input[type="reset"]), textarea, select').val('').attr( 'checked', false );

        });

        // Cancel default action
        e.preventDefault();
    });
});/*END FUNCTION*/