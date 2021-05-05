<h1>Summery</h1>

<table style="border: 1px solid black">
    <tr>
        <td style="border: 1px solid black">სახელი</td>
        <td style="border: 1px solid black">გვარი</td>
        <td style="border: 1px solid black">პოზიცია</td>
        <td style="border: 1px solid black">ხელფასი</td>
        <td style="border: 1px solid black">დაკავებული შემოსავალი</td>
        <td style="border: 1px solid black">დარიცხული ხელფასი</td>
    </tr>

    <tr style="border: 1px solid black">
        <td>
            <?php echo $_GET['name'] ?>
        </td>
        <td>
            <?php echo $_GET['lastname'] ?>
        </td>
        <td>
            <?php echo $_GET['position'] ?>
        </td>
        <td>
            <?php echo $_GET['salary'] ?>
        </td>
        <td>
            <?php echo 2000*(20/100) ?>
        </td>
        <td>
            <?php echo 2000-(2000*(20/100)) ?>
        </td>
    </tr>
</table>