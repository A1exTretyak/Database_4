<?php
include "functions.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма добавления</title> 
    </head>
    <body> 
        <div>
            <form action="addController.php" method="POST" role='form'>
                <div>
                    <div>
                        <label for="fio">ФИО</label>
                        <div>
                            <input id="fio" type="text" name="fio"/>
                        </div>
                    </div>
                    <div>
                        <label for="birth">Дата рождения</label>
                        <div>
                            <input id="birth" type="text" name="birth"/>
                        </div>
                    </div>
                    <div>
                        <label for="home">Домашний адрес</label>
                        <div>
                            <input id="home" type="text" name="home"/>
                        </div>
                    </div>
                    <div>
                        <label for="phonenumber">Номер телефона</label>
                        <div>
                            <input id="phonenumber" type="text" name="phonenumber"/>
                        </div>
                    </div>
                    <button type="submit" name="add">Добавить</button>
                </div>
            </form>
        </div>
    </body>
<html></html>