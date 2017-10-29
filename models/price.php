<?php

    class Price {
        function __construct() {
            $this->db = new Db();
        }
        function select(){
         
            //1)$this->db->query('SELECT*FROM Product p  WHERE p.status!=1');
            //2)$this->db->query('SELECT*FROM Product p LEFT JOIN DocPriceBody dpb ON dpb.product_id=p.id WHERE p.status!=1');
            //3)$this->db->query('SELECT*FROM Product p LEFT JOIN DocPriceBody dpb ON dpb.product_id=p.id LEFT JOIN DocPrice dp ON dp.id=dpb.doc_id WHERE p.status!=1');
            //4)А вот как згруппировать по product_id в dpb и выбрать последнее значение datetime в dp и отобрать price в dpb по полученным doc_id я так и не понял
            
            return $this->db->query('SELECT*FROM Product p LEFT JOIN DocPriceBody dpb ON dpb.product_id=p.id LEFT JOIN DocPrice dp ON dp.id=dpb.doc_id WHERE p.status!=1');
        }

    }
    


