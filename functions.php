<?php
$link=false;
function OpenDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "school");
    mysqli_query($link, "SET NAMES UTF8");
}
function CloseDB()
{
    global $link;
    mysqli_close($link);
}
function getInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM student");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function deleteInfo($id)
{
    global $link;
    OpenDB();
    $delete=mysqli_query($link,"DELETE FROM student WHERE student_id=$id");
    CloseDB();
    return $delete;
}
function addInfo($fio, $birth,  $home, $phonenumber)
{
    global $link;
    OpenDB();
    $add=mysqli_query($link, "INSERT into student (full_name, birth_date, address, phone) value ('$fio', '$birth', '$home', '$phonenumber')");
    CloseDB();
    return $add;
}
?>