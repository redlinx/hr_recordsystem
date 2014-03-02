<<<<<<< HEAD
<div>
=======
<div id="body">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()"> Back </button>    
<<<<<<< HEAD
        <table class="table table-striped">
=======
        <table width="500" lign="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
            <tr align="left">
                <th>School</th>
                <th>Address</th>
                <th>Year</th>
                <th>Type</th>
                <th>Degree</th>
            </tr>
            <?php
                for($x=0;$x<count($page_view_content);$x++)
                {
                    echo '<tr>';
                    echo '<td>'.$page_view_content[$x]['school_name'].'</td>';
                    echo '<td>'.$page_view_content[$x]['address'].'</td>';
                    echo '<td>'.$page_view_content[$x]['year'].'</td>';
                    echo '<td>'.$page_view_content[$x]['type_desc'].'</td>';
                    echo '<td>'.$page_view_content[$x]['degree'].'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
</div>