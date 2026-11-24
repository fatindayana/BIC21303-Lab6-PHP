<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "Fatin Dayana";
        $matric = "AI240068";
        $course = "Software Engineering";
        $year = "Year 3";
        $adress = "Lorong Luas 1, Kampung Pandan Dalam"
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Adress</td>
            <td><?php echo $adress; ?></td>
        </tr>
    </table>

</body>
</html>