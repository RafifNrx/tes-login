<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <style>
    .teks-biru{
            color: #69cfff;
            font-family: cursive;
            font-weight: bold;
        } 

    </style>
</head>

<body>
    <table border="1" style="border-collapse: collapse; border-color: black; border-style: solid; background-color: rgb(197, 242, 255)">
        <tbody>
            <tr class="teks-biru">
                <td>NAMA</td>
                <td><?php
                    echo $_POST['p_nm'];?></td>
            </tr>
            <tr class="teks-biru">
                <td>EMAIL</td>
                <td><?php
                    echo $_POST['p_email'];?></td>
            </tr>
            <tr class="teks-biru">
                <td>PESANMU</td>
                <td><?php
                    echo $_POST['pesan'];?></td>
            </tr>
            

            
        </tbody>
    </table>
</body>
</html>