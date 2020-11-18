
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
   

        <div  id="page-wrapper">
            <div class="row">
            <div class="col-sm-12">
  <h2>Schedule Management</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Code</th>
        <th>Emails</th>
        <th>Done </th>
        <th>Processing...</th>
        <th>Content...</th>
        <th>Time</th>



      </tr>
    </thead>
    <tbody>
    <?php
        $i=1;
        foreach($data as $row)
        {
            $var_email = 'count_email'.$row->tag;
            $var_fail = 'count_fail'.$row->tag;
            $var_done = 'count_done'.$row->tag;
            $var_name = 'name'.$row->tag;
            $var_content = 'content'.$row->tag;
            $var_time = 'time'.$row->tag;
        echo "<tr>";
        echo "<td><h4>".$i."</h4></td>";
        echo "<td><h4>".$$var_name."</h4></td>";
        echo "<td><h5>".$row->tag." </h5></td>";
        echo "<td><h4>".$$var_email." emails</h4></td>";
        echo "<td  style=\"color: blue\"><h4>".$$var_done."</h4></td>";
        echo "<td style=\"color: red\"><h4>".$$var_fail ."</h4></td>";
        echo "<td><h4>".$$var_content ."</h4></td>";
        echo "<td><h4>".date('l Y/m/d H:i', $$var_time)."</h4></td>";

        echo "</tr>";
        $i++;
        }
        ?>     

     
    </tbody>
  </table>
</div>
                </div>
                <!-- /.col-sm-12 -->
            
            <!--start input -->

               

                
                </div>
                



