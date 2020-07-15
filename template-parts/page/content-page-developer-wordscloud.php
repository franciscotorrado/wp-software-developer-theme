<div class="card-body" style="height: 500px;" id="demo">

</div>

<?php function shapeSpace_print_scripts() { ?>

    <script>

        var words = [
            {text: "Developer", weight: 20},
            {text: "Java", weight: 12},
            {text: "PHP", weight: 12},
            {text: "Spring", weight: 10},
            {text: "Javascript", weight: 12},
            {text: "Dart", weight: 10},
            {text: "Typescript", weight: 12},
            {text: "Flutter", weight: 10},
            {text: "Vue", weight: 10},
            {text: "Nativescript", weight: 10}
        ];

        jQuery('#demo').ready(function( $ ) {

            console.log('loading words cloud');
            jQuery('#demo').jQCloud(words, {
                colors: ["#44838C", "#FFC653"],
                fontSize: {
                    from: 0.1,
                    to: 0.02
                }
            });
        });


    </script>

<?php }

add_action( 'wp_footer', 'shapeSpace_print_scripts' );
?>
