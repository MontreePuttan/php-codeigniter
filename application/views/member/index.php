<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <h1><?php echo $this->lang->line("hello"); ?></h1>
    <h1><?php echo $this->lang->line("world"); ?></h1>
    <p>
        <?php
            echo anchor("member/change/thailand","ไทย");
        ?>
        &nbsp;
        <?php
            echo anchor("member/change/english","English");
        ?>
    </p>
    <h1>Show Member</h1>
    <?php echo anchor("member/add","Add"); ?>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Member Name</th>
                <th>Member Tel</th>
                <th>Member Address</th>
                <th>Edit</th>
                <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            if(count($rs)==0)
            {
                echo "<tr><td colspan='4' align='center'>-- no data --</td></tr>";
            }
            else
            {
                $no = $this->uri->segment(3)+1;
                foreach ($rs as $r)
                {
                    echo "<tr>";
                    echo "<td align='center'>$no</td>";
                    echo "<td>".$r['member_name']."</td>";
                    echo "<td>".$r['member_tel']."</td>";
                    echo "<td>".$r['member_address']."</td>";
                    echo "<td align='center'>";
                    echo anchor("member/edit/".$r['id'],"Edit");
                    echo "</td>";
                    echo "<td align='center'>";
                    echo anchor("member/del/".$r['id'],"Delete",array("onclick"=>"javascript:return confirm('are you sure?');"));
                    echo "</td>";
                    echo "</tr>";
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
   
    <?php echo $this->pagination->create_links(); ?>
   
</body>
</html>