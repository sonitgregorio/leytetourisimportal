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

       $('.ins_reserv').submit(function(){
          $.post("/hotel/ins_reservs", $(this).serialize(), function(data){
            // alert(data);
            $('#reserv').html(data);
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



       $('.rester').click(function(e){
         $img = $(this).data('param');
         $descr = $(this).data('param1');
         $path = '/assets/images/' + $img;
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

        $('.annou').click(function(e){
         $img = $(this).data('param');
         $descr = $(this).data('param1');
         $path = '/assets/images/profpic/' + $img;
         $('#img').attr('src', $path);
         $('.descr').html($descr);
         $('#resizeimage').modal('show');
         e.preventDefault();
       });

        $('#example').DataTable();

       $('.checkin').change(function(e){
        var check_in = new Date($('input[name=datereserve]').val());
        var check_out = new Date($('input[name=check_out]').val());
        var diff  = new Date(check_out - check_in );
        var days = diff/1000/60/60/24;
        if (days < 0) {
          $('#groups').addClass('has-error');
        }else{
           $('#groups').removeClass('has-error');
           $('input[name=no_days]').val(days);
        }
        e.preventDefault();
       });

       $('#tos').change(function(){
          tos = $('#tos').val();
          froms = $('#froms').val();
          shows = $('#shows').val();
          if (froms == '') {
            froms = $('#nowdate').val();
          };
           $.post("/home/get_filter_logs", {froms, tos, shows}, function(data){
            $('.filt').html(data);
          });

       });

       $('#froms').change(function(){
          tos = $('#tos').val();
          froms = $('#froms').val();
          shows = $('#shows').val();
          if (tos == '') {
            tos = $('#nowdate').val();
          };

          $.post("/home/get_filter_logs", {froms, tos, shows}, function(data){
            $('.filt').html(data);
          });


         

       });

       $('.buts').click(function(){
          $('.buts').hide();
       });
       $('.bets').click(function(){
          $('.buts').show();

       });


      

  });
</script>
