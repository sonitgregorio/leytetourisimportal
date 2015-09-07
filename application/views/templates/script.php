<script>



      $(document).ready(function(){
          $('#example').DataTable();

          $('.carousel').carousel({
              interval: 2000
            });

           $('#orig').submit(function() {
            $.post("/login/origpost", $("#orig").serialize(), function(data){
              //alert(data);
               $('#ors').html(data);
            });
         });

         $('.origs').submit(function() {
          $.post( "/login/origpost", $(this).serialize(), function(data){
            // alert(data);
             $('#ors').html(data);

          });
       });

       $('#form_submits').submit(function(){
         $.post("/login/register_users", $(this).serialize(), function(data){
              alert(data);
              $('#user_reg').html(data);
         });

       });

       $('.login_submit').submit(function(){
         $.post("/login/verify_login", $(this).serialize(), function(data){
            if (data == '2')
            {
                document.location = '/';
            }
            else
            {
                $('#lo').html(data);
            }
         });
       });

  });
</script>
