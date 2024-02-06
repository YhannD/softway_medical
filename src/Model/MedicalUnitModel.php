<?php

declare(strict_types=1);

namespace App\Model;

use App\Core\AbstractModel;

class MedicalUnitModel extends AbstractModel
{
    // Insert a new medical unit into the database
    public function createMedicalUnit(int $indexValue, string $medicalUnit): bool
    {
        $sql = "INSERT INTO medical_units (index_value, medical_unit) VALUES (?, ?)";
        $values = [$indexValue, $medicalUnit];
        return $this->db->executeQuery($sql, $values)->rowCount() > 0;
    }

    // Retrieve all medical units from the database
    public function getAllMedicalUnits(): array
    {
        $sql = "SELECT * FROM medical_units";
        return $this->db->getAllResults($sql);
    }

    // Retrieve a specific medical unit by its ID
    public function getMedicalUnitById(int $id): ?array
    {
        $sql = "SELECT * FROM medical_units WHERE id = ?";
        return $this->db->getOneResult($sql, [$id]);
    }

    // Update a medical unit's information in the database
    public function updateMedicalUnit(int $id, int $indexValue, string $medicalUnit): bool
    {
        $sql = "UPDATE medical_units SET index_value = ?, medical_unit = ? WHERE id = ?";
        $values = [$indexValue, $medicalUnit, $id];
        return $this->db->executeQuery($sql, $values)->rowCount() > 0;
    }

    // Delete a medical unit from the database
    public function deleteMedicalUnit(int $id): bool
    {
        $sql = "DELETE FROM medical_units WHERE id = ?";
        return $this->db->executeQuery($sql, [$id])->rowCount() > 0;
    }
}
