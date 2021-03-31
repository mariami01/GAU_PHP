<h1>Summery</h1>

<table style="border: 1px solid black">
    <tr>
        <td style="border: 1px solid black">სახელი</td>
        <td style="border: 1px solid black">გვარი</td>
        <td style="border: 1px solid black">საგანი</td>
        <td style="border: 1px solid black">სემესტრი</td>
        <td style="border: 1px solid black">ფაკულტეტი</td>
        <td style="border: 1px solid black">ქულა</td>
        <td style="border: 1px solid black">შეფასება</td>
        <td style="border: 1px solid black">ლექტორის სახელი</td>
        <td style="border: 1px solid black">ლექტორის გვარი</td>
    </tr>
    <tr style="border: 1px solid black">
        <td><?= $_POST['name'] ?></td>
        <td><?= $_POST['lastnme'] ?></td>
        <td><?=  $_POST['subject'] ?></td>
        <td><?= $_POST['semester'] ?> </td>
        <td><?= $_POST['faculity']?> </td>
        <td><?= $_POST['score']?> </td>
        <td><?php 
                if ($_POST['score'] >= 91) {
                    echo "A";
                }else if ($_POST['score'] >= 81) {
                    echo "B";
                }else if ($_POST['score'] >= 71) {
                    echo "C";
                }else if ($_POST['score'] >= 61) {
                    echo "E";
                }else{
                    echo "failed!";
                }
            ?>
        </td>
        <td><?= $_POST['lecturerName'] ?></td>
        <td><?= $_POST['LecturerLastname'] ?></td>
    </tr>

</table>