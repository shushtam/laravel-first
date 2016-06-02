<html>
   <body>
      
      <?php
         echo Form::open(array('url' => 'foo/bar'));
            echo Form::text('name','name');
            echo '<br/>';

            echo Form::text('year','year');
            echo '<br/>';

            
            echo Form::submit('Click Me!');
         echo Form::close();
      ?>
   
   </body>
</html>