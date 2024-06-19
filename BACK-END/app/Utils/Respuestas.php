<?php

namespace App\Utils;

class Respuestas {

    public $response = [
        'status' => "ok",
        "result" => []
    ];

    public function error_405() {
        return $this->createErrorResponse("405", "Metodo no permitido");
    }

    public function error_200($valor = "Datos incorrectos") {
        return $this->createErrorResponse("200", $valor);
    }

    public function error_400() {
        return $this->createErrorResponse("400", "Datos enviados incompletos o con formato incorrecto");
    }

    public function error_500($valor = "Error interno del servidor") {
        return $this->createErrorResponse("500", $valor);
    }

    public function error_401($valor = "No autorizado") {
        return $this->createErrorResponse("401", $valor);
    }

    private function createErrorResponse($errorId, $errorMsg) {
        $this->response['status'] = "error";
        $this->response['result'] = [
            "error_id" => $errorId,
            "error_msg" => $errorMsg
        ];
        return response()->json($this->response, (int) $errorId);
    }
}
