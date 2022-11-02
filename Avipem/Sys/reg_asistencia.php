<form id="form_enviar" method="post">
<input type="text" placeholder="Enviar mensaje..."  name="msg" id="msg">
</form>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("#form_enviar").submit(function(event) {
            //Evita que la pagina se recargue
            event.preventDefault();
            $.ajax({
                url:'url_a_tu_archivo.php',
                type: 'POST',
                data: $("#form_enviar").serialize(),
                success: function (response) {
                    console.log(response);
                }
            });
        });
    });
</script>