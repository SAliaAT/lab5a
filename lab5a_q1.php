<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "SITI ALIA AZIMA BINTI TOHKID@TOHID";
        $matricNumber = "AI220109";
        $course = "BIS";
        $yearOfStudy = "3";
        $address = "Parit Sulong, Batu Pahat";
    ?>

    <table>
    <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matricNumber; ?></td> 
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $yearOfStudy; ?></td> 
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
    
</body>
</html>
