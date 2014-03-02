<div id="body">
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
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
    <table width="500" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
        <tr align="left">
            <th>Title</th>
            <th>Venue</th>
            <th>Date</th>
            <th>Organizer</th>
            <th>Role</th>
            <th>Type</th>
        </tr>
    <?php
        for($x=0;$x<count($page_view_content);$x++)
        {
            echo '<tr>';
            echo '<td>'.$page_view_content[$x]['training_title'].'</td>';
            echo '<td>'.$page_view_content[$x]['venue'].'</td>';
            echo '<td>'.$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year'].'</td>';
            echo '<td>'.$page_view_content[$x]['organizer'].'</td>';
            echo '<td>'.$page_view_content[$x]['role'].'</td>';
            echo '<td>'.$page_view_content[$x]['type_desc'].'</td>';
            echo '</tr>';
        }
    ?>
    </table>
</div>