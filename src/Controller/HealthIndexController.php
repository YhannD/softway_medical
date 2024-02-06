<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\MedicalUnitModel;
use App\Services\HealthDiagnosisService;
use App\View\HealthIndexView;

class HealthIndexController
{
    private HealthDiagnosisService $model;
    private HealthIndexView $view;

    public function __construct()
    {
        $medicalUnitModel = new MedicalUnitModel();
        $this->model = new HealthDiagnosisService($medicalUnitModel);
        $this->view = new HealthIndexView();
    }

    public function index(): void
    {
        $diagnosis = null;

        // Check if healthIndex is posted
        if (!empty($_POST['healthIndex'])) {
            $healthIndex = $_POST['healthIndex'];
            error_log("healthIndex received: " . $healthIndex); // Log received healthIndex
            $diagnosis = $this->model->diagnose($healthIndex); // Perform diagnosis

            // Check if the request is an AJAX request
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                echo json_encode(['diagnosis' => $diagnosis]); // Return diagnosis as JSON
                exit;
            }
        }

        // Render diagnosis view
        $this->view->renderDiagnosis(['diagnosis' => $diagnosis]);
    }
}
