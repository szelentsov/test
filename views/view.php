<?php
    class View {

        function __construct() {
            
        }
        function table($arr) {
            echo '<table border="1">';
                echo '<thead>';
                    echo '<tr>';
                        echo '<td>Наименование</td>';
                        echo '<td>Описание</td>';
                        echo '<td>Номер документа</td>';
                        echo '<td>Дата документа</td>';
                        echo '<td>Цена</td>';
                    echo '</tr>';
                echo '</thead>';
                echo '<tbody>';                   
                    while ($row = $arr->fetch()){
                        echo '<tr>';
                            echo '<td>' .$row['title'] .'</td>' ;
                            echo '<td>' .$row['description'] .'</td>' ;
                            echo '<td>' .$row['doc_id'] .'</td>' ;
                            echo '<td>' .$row['datetime'] .'</td>' ;
                            echo '<td>' .$row['price'] .'</td>' ;                           
                        echo '</tr>';
                    }                   
                echo '</tbody>';
            echo '</table>';
        }

    }
