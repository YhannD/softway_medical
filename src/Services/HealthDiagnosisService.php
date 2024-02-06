<?php

declare(strict_types=1);

namespace App\Services;

use App\Model\MedicalUnitModel;

class HealthDiagnosisService
{
    private MedicalUnitModel $medicalUnitModel;

    public function __construct(MedicalUnitModel $medicalUnitModel) {
        $this->medicalUnitModel = $medicalUnitModel;
    }

    public function diagnose(string $healthIndex): array
    {
        $results = [];
        $pathologies = $this->medicalUnitModel->getAllMedicalUnits();

        foreach ($pathologies as $pathologie) {
            // Check if healthIndex is a multiple of the pathology's index_value
            if ($healthIndex % $pathologie['index_value'] === 0) {
                $results[] = $pathologie['medical_unit'];
            }
        }

        // Return diagnostic results or a message if no pathology detected
        return empty($results) ? ["Aucune pathologie détectée"] : $results;
    }
}
