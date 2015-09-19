<script>
      $(document).ready(function(){
        $('#example').DataTable();

          $('.carousel').carousel({
              interval: 2000
            });

           $('#orig').submit(function() {
            $.post("/login/origpost", $("#orig").serialize(), function(data){
               $('#ors').html(data);
            });
         });

         $('.origs').submit(function() {
          $.post( "/login/origpost", $(this).serialize(), function(data){
             $('#ors').html(data);

          });
       });

       $('#form_submits').submit(function(){
         $.post("/login/register_users", $(this).serialize(), function(data){
              $('#user_reg').html(data);
         });
       });

       $('.login_submit').submit(function(){
         $.post("/login/verify_login", $(this).serialize(), function(data){
            if (data == '2')
            {
                document.location = '/home';
            }
            else
            {
                $('#lo').html(data);
            }

         });
       });

       $('.res').click(function(e){
         $img = $(this).data('param');
         $descr = $(this).data('param1');
         $path = '/assets/images/gallery/' + $img;
         $('#img').attr('src', $path);
         $('.descr').html($descr);
         $('#resizeimage').modal('show');
         e.preventDefault();
       });


        $('.room').click(function(e){
         $img = $(this).data('param');
         $descr = $(this).data('param1');
         $path = '/assets/images/roomsgal/' + $img;
         $('#img').attr('src', $path);
         $('.descr').html($descr);
         $('#resizeimage').modal('show');
         e.preventDefault();
       });

  });
</script>
