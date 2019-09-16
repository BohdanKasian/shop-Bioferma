<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bio-ferma
 */

?>

	</div><!-- #content -->




<script type="text/javascript">
    // Снипет 1 - Название функции которую будем запускать
    function popUpFormBIO1_outside_7() {
        fbq('track', 'Lead');
        var msg   = $('#form-BIO-outside-7').serialize(); //Идентификатор формы с которой работаем
        $.ajax({
            type: 'POST',
            url: 'mail/post-7.php',  //Адрес к обработчику
            data: msg,
            success: function(data) {
                $('.results').html(data);
                //Всплывающее окно
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });

        console.log('ok');

    };

    // Снипет 2 - Cброс данных формы, запуск через onclick в submit

    function goAfterFlyBIO1_outside_7() {
        document.getElementById('form-BIO-outside-7').reset();
        console.log('ok2');

        document.getElementById('popUpFormZagolovokBIO-1-outside-7').innerHTML = ('Заявка успешно принята!');

        document.getElementById('formInCallBIO-1-outside-7').style.display='none';

        document.getElementById('formInCallTextIconImageBIO-outside-7').style.display='inline-block';


    }
</script>

	<footer id="colophon" class="site-footer">
        <?php

            do_action('bio_ferma_footer_parts');
        ?>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
