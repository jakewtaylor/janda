<?php

namespace App\Classes;

use Exception;

class ErrorResponder {
    protected $type;

    public function __construct (string $type = 'model') {
        $this->type = $type;
    }

    protected function error (string $message, Exception $e) {
        return response()->json([
            'error' => true,
            'message' => $message,
            'exception' => $e->getMessage(),
        ]);
    }

    public function createModelFailure (Exception $e) {
        return $this->error("Failed to create $this->type.", $e);
    }

    public function updateModelFailure (Exception $e) {
        return $this->error("Failed to update $this->type.", $e);
    }

    public function deleteModelFailure (Exception $e) {
        return $this->error("Failed to delete $this->type.", $e);
    }
}
