<?php

    /*
        Clase: FileList
        Autor: Robert Sallent
        Última mofidicación: 22/03/2023

        Nos facilitará la tarea de realizar listados de directorio

    */

    class FileList{
        public $directory; // directorio donde buscar
        
        // constructor
        // recibe la ruta al directorio de trabajo, por defecto el actual
        public function __construct(string $directory = '.'){
            $this->directory = $directory;
        }
        
        // método que recupera la lista de entradas en el directorio
        // permite filtrado mediante expresión regular
        public function getEntries(string $regexp = "/.*/"):array{
            $all = scandir($this->directory);
                   
            $filtered = [];
            foreach($all as $entry)
                if(preg_match($regexp, $entry))
                    $filtered[] = "$this->directory/$entry";
            
            return $filtered;
        }

        // alias de getEntries()
        public function get(string $regexp = "/.*/"):array{
            return $this->getEntries($regexp);
        }
    }


