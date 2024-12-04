<?php
    class JsonReader {
        private $jsonFilePath;

        // Constructor para inicializar la ruta del archivo JSON
        public function __construct($jsonFilePath) {
            $this->jsonFilePath = $jsonFilePath;
        }

        // Función privada para leer el archivo JSON y retornar el array correspondiente
        private function getArrayFromJson($section) {
            // Lee el contenido del archivo JSON
            $jsonContent = file_get_contents($this->jsonFilePath);
            
            // Decodifica el JSON a un array asociativo
            $data = json_decode($jsonContent, true);
            
            // Verifica si la sección solicitada existe en el JSON
            if (array_key_exists($section, $data)) {
                // Retorna el array correspondiente a la sección
                return $data[$section];
            } else {
                // Si la sección no existe, devuelve un mensaje de error
                return "Sección '$section' no encontrada en el archivo JSON.";
            }
        }

        // Función pública para obtener el array de una sección específica
        public function getArray($section) {
            return $this->getArrayFromJson($section);
        }
    }
?>