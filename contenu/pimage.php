
<div class="form-group">
    Ajout d'image :
    <input type="file" name="images[]" id="image">
    <input type="file" name="images[]" id="duplicate" class="hidden">
</div>
<p>
    <a href="#" id="duplicatebtn">Ajouter image</a>
</p>
<?php
    ob_start(); 
?>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script>
        (function ($) {
            $('#duplicatebtn').click(function (e) {
                e.preventDefault();
                var clone = 
                $('#duplicate').clone().attr('id','').removeClass('hidden');
                $('#duplicate').before(clone);
            })
        })(jQuery);
    </script>
    