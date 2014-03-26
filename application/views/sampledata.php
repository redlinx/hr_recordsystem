<html>
<head>
    <title id='Description'>Sample</title> 
    <link rel="stylesheet" href="<?php echo base_url().'datatable/jqwidgets/styles/jqx.base.css'?>" type="text/css">
    <script type="text/javascript" src="<?php echo base_url().'datatable/scripts/jquery-1.11.0.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/jqwidgets/jqxcore.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/jqwidgets/jqxdata.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/jqwidgets/jqxbuttons.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/jqwidgets/jqxscrollbar.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/jqwidgets/jqxlistbox.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/jqwidgets/jqxdropdownlist.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/jqwidgets/jqxdatatable.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/jqwidgets/jqxtooltip.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/jqwidgets/jqxinput.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'datatable/scripts/demos.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#dataTable").jqxDataTable(
            {
                altrows: true,
                sortable: true,
                columns: [
                  { text: 'Last Name', dataField: 'Last Name', width: 125 },
                  { text: 'First Name', dataField: 'First Name', width: 125 },
                  { text: 'View', dataField: 'View', width: 120 },
                  { text: 'Action', dataField: 'Action', width: 120 },
                ]
            });
            $("#jqxButton").jqxLinkButton({ width: '120', height: '25' });
        });
    </script>
</head>
<body class='default'>
    <div>
        <a target="_blank" href="http://www.jqwidgets.com" id='jqxButton'>Link Button</a>      
    </div>
    <br/>
    <table id="dataTable" border="1">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                for($x=0;$x<count($faculty_list);$x++)
                {
                    echo '<tbody>';
                        echo '<tr>';
                            echo '<td>'.$faculty_list[$x]['lastname'].'</td>';
                            echo '<td>'.$faculty_list[$x]['firstname'].'</td>';
                            echo '<td><a href="'.base_url().'index.php/view_hr/faculty/'.$faculty_list[$x]['emp_id'].'">View</a></td>';
                            echo '<td><a href="'.base_url().'index.php/hr_update/deactivate/'.$faculty_list[$x]['emp_id'].'">Deactivate</a></td>';
                        echo '</tr>';
                    echo '</tbody>';
                }
            ?>
    </table>
</body>
</html>